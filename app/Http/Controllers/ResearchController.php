<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class ResearchController extends Controller
{

    protected $researchSeminars = "o:e4a6774fba1e72923263";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $CC = new CC();
        $results = $CC->getItem('research');
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        $results = $CC->getCategory($params['item']->_qname);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 

        return view('research.research')->with($params);  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function researchSeminars()
    { 
        $CC = new CC();
        $results = $CC->getCategory($this->researchSeminars);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 

        return view('research.research-seminars')->with($params);  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function researchSeminarsRedirect()
    { 
        return redirect('/research/research-seminars');  
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
        return view('articles.item')->with($params); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRS($slug)
    {
        $CC = new CC();
        $results = $CC->getItem($slug);
        //Slug should be unique, so we should get only one item
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 
        return view('research.research-seminar')->with($params); 
    }

}
