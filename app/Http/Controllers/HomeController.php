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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CC = new CC();
        $results = $CC->getContentByProperty("availableOnHomepage", "true", -1, false);
        $items = $CC->parseItems($results->rows);
        $items =  (object) $items;

        $params['items'] =  $CC->sortHomepage($items);

        return view('home.home')->with($params);
    }
}
