<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Extensions\CloudCmsHelper as CC;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $this->CC = new CC();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = $this->CC->getContentByProperty("availableOnHomepage", "true", -1, false);
        $items = $this->CC->parseItems($results['rows']);
        $params['items'] =  $this->CC->sortHomepage($items);
        //dd($params['items']['news'][0]);
        //return response()->view('home.home', $params)->setTtl(60 * 60 * 24 * 7); //caching a week
        return response()->view('home.home', $params);
    }    
}
