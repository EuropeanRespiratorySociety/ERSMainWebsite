<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class CalendarController extends Controller
{
    protected $calendarCategory = "o:cc1c5be57719dade0371";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CC = new CC();
        $results = $CC->getCategorySorted($this->calendarCategory, "eventDate", 1);

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $items = $CC->parseItems($results->rows, true);
        $array = array_values(array_sort($items, function ($value) {
            return $value['calendar']->timestamp;
        }));
        $items = $CC->sortCalendar($items);
        $params['items'] = (object) $items; 
        return view('congress-and-events.calendar')->with($params);    

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $CC = new CC();
        $results = $CC->getItem($slug);

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }
        
        //Slug should be unique, so we should get only one item
        $course = $CC->parseItems($results->rows);
        $params['course'] =  (object) $course[0]; 
        return view('professional.course')->with($params); 
    }

}
