<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class CpdController extends Controller
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
        $results = $this->CC->getItem('cpd');
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
        return view('professional.cpd-main')->with($params);    
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function phd()
  {
    $results = $this->CC->getItem('phd-overview');
    $item = $this->CC->parseItems($results['rows']);
    $params['item'] =  (object) $item[0];

    if(!$item[0]->url || !$item[0]->uri){
        $this->CC->setCanonical($item[0]->_qname);
    }
    if($item[0]->hasRelatedArticles > 0){
        $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
        $relatedItems = $this->CC->parseItems($related['rows']);
        $params['relatedItems'] =  (object) $relatedItems; 
    }    

    return view('professional.phd-overview')->with($params); 
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function testCPD()
  {
    $results = $this->CC->getItem('test-cpd');
    $item = $this->CC->parseItems($results['rows']);
    $params['item'] =  (object) $item[0];

    if(!$item[0]->url || !$item[0]->uri){
        $this->CC->setCanonical($item[0]->_qname);
    }
    if($item[0]->hasRelatedArticles > 0){
        $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
        $relatedItems = $this->CC->parseItems($related['rows']);
        // $params['relatedItems'] =  (object) $relatedItems; 
    }    

    return view('professional.cpd-test')->with($params); 
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    { 
        $results = $this->CC->getItem($slug);
        $item = $this->CC->parseItems($results['rows']);
        $item[0]->modules = $this->prepareModules($item[0]->diseaseModules);
        
        $params['item'] =  (object) $item[0]; 
        //dd($params);
        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }
       
        return view('professional.cpd')->with($params);
    }

    private function prepareModules($diseaseModules){
        $result = [] ;
        if($diseaseModules){
            //split the array of modules to several arrays of 10 modules each
            $modulesChunk = array_chunk($diseaseModules,10);
            
            $first = 1;
            $last = 0;
            foreach($modulesChunk as $index => $modules){
                $last = $last + count($modules);
                $uiModules = new UiModules($first, $last, $modules);
                $first = $first + count($modules);
                array_push($result, $uiModules);
            }
        }
        return $result;
    }

}

class UiModules
{
    public function __construct($first, $last, $modules)
    {
        $this->modules = $modules;
        $this->first = $first;
        $this->last = $last;
        $this->sectionLabel = "Modules $first-$last";
    }
}
