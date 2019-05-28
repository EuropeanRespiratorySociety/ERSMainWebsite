<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

//Respiratory Failure and Mechanical Ventilation Controller
class RfmvController extends Controller
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
    $results = $this->CC->getItem('rfmv-main');
    $item = $this->CC->parseItems($results['rows']);
    $params['item'] =  (object) $item[0]; 
    if(!$item[0]->url || !$item[0]->uri){
        $this->CC->setCanonical($item[0]->_qname);
    }
    
    return view('congress-and-events.rfmv-main')->with($params);    

  }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($slug)
    // {
    //     $results = $this->CC->getItem($slug);
    //     $item = $this->CC->parseItems($results['rows']);
    //     $params['item'] =  (object) $item[0]; 
        
    //     if(!$item[0]->url || !$item[0]->uri){
           
    //         $this->CC->setCanonical($item[0]->_qname);
    //     }
        
    //     return view('professional.webinar')->with($params); 
    // }
}
