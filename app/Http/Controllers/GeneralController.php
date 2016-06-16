<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class GeneralController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return redirect('/#publications');
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
        //Slug should be unique, so we should get only one item
        $course = $CC->parseItems($results->rows);
        $params['item'] =  (object) $course[0]; 
        return view('articles.item')->with($params); 
    }

}
