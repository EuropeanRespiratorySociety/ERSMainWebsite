<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

class WebinarController extends Controller
{
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
    //Select ers-webinars ers:category
    $item = $this->CC->getItem('ers-webinars');
    $item = $this->CC->parseItems($item['rows']);
    $params['item'] = (object) $item[0];

    if(!$item[0]->url || !$item[0]->uri){
        $this->CC->setCanonical($item[0]->_qname, 'professional-development/ers-webinars');
    }
    $results = $this->CC->getAssociation($params['item']->_qname);
    $items = $this->CC->parseItems($results['rows']);
    $sorted = $this->CC->sortItems($items);
    $params['items'] =  $sorted; 
    dd($params);
    return view('professional.webinars')->with($params);  

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
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 
        
        if(!$item[0]->url || !$item[0]->uri){
           
            $this->CC->setCanonical($item[0]->_qname);
        }
        
        return view('professional.webinar')->with($params); 
    }
}
