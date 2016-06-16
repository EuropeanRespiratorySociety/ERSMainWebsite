<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class WhoWeAreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slug = "who-we-are";
        $CC = new CC();
        $results = $CC->getItem($slug);
        //Slug should be unique, so we should get only one item
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 
        return view('articles.item')->with($params); 

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
