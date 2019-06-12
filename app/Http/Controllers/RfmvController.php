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
    $results = $this->CC->getItem('ers-respiratory-failure-and-mechanical-ventilation-conference');
    $item = $this->CC->parseItems($results['rows']);
    $params['item'] =  (object) $item[0]; 
    if(!$item[0]->url || !$item[0]->uri){
        $this->CC->setCanonical($item[0]->_qname);
    }
    $params['relatedItems'] = false;
    if($item[0]->hasRelatedArticles > 0){
        $related = $this->CC->getOutgoingAssociationSorted($item[0]->_qname, 'ers:related-association');
        $relatedItems = $this->CC->parseItems($related['rows']);
        $params['relatedItems'] =  (object) $relatedItems;
    }
    return view('congress-and-events.rfmv-main')->with($params);    
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
        $params['relatedItems'] = false;
        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }
        if($item[0]->hasRelatedArticles > 0){
           $related = $this->CC->getOutgoingAssociationSorted($item[0]->_qname, 'ers:related-association');
            if($related['total_rows'] > 0){
                $relatedItems = $this->CC->parseItems($related['rows']);
                $params['relatedItems'] =  (object) $relatedItems;
            }
        }
        return view('congress-and-events.rfmv')->with($params); 
    }
}
