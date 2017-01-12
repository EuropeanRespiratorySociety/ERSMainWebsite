<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use Input;
use App\Extensions\CloudCmsHelper as CC;

class CalendarController extends Controller
{
    protected $calendarCategory = "o:cc1c5be57719dade0371";

    public function __construct() {
        $this->CC = new CC();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get the type of events to display
        $type = Input::get('type', 'all');

        $results = $this->CC->getCategorySorted($this->calendarCategory, "eventDate", 1);
        $items = $this->CC->parseItems($results['rows'], true);
        $array = array_values(array_sort($items, function ($value) {
            return $value->calendar->timestamp;
        }));
        $items = $this->CC->prepareCalendar($items, $type);
        //dd($items[2017]['January']);
        $params['items'] = (object) $items; 
        $params['type'] = $type;
        return view('congress-and-events.timeline')->with($params);    

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $results = $this->CC->getItem($slug);
        $course = $CC->parseItems($results['rows']);
        $params['item'] =  (object) $course[0]; 
        return view('professional.course')->with($params); 
    }

}
