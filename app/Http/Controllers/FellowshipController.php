<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class FellowshipController extends Controller
{
    protected $property = "contentType";
    protected $propertyValue = "event_fellowship";
    protected $shortTerm = "o:aa1d863fcbb1c83e06c3";
    protected $longTerm = " o:35da974d3c05ca528f3f";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CC = new CC();
        $results = $CC->getContentByProperty($this->property, $this->propertyValue);
        $items = $CC->parseItems($results->rows);
        shuffle($items);
        $params['items'] =  (object) $items;
        return view('professional.fellowships')->with($params);

    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexShortTerm()
    {
        $CC = new CC();
        $results = $CC->getCategory($this->shortTerm);
        $items = $CC->parseItems($results->rows);
   
        $params['fellowships'] =  (object) $items; 
        return view('professional.short-term-fellowships')->with($params);    

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexLongTerm()
    {
        $CC = new CC();
        $results = $CC->getCategory($this->longTerm);
        $items = $CC->parseItems($results->rows);
   
        $params['fellowships'] =  (object) $items; 
        return view('professional.long-term-fellowships')->with($params);    

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
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 
        return view('professional.fellowship')->with($params); 
    }

}
