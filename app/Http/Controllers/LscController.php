<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class LscController extends Controller
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
        $results = $this->CC->getItem('mechanisms-of-acute-exacerbation-of-respiratory-disease');
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
        
        return view('congress-and-events.lsc')->with($params);    

    }     
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function respiratoryUpdate()
    {
        $results = $this->CC->getItem('ers-respiratory-updates');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] = $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        if($item[0]->hasRelatedArticles > 0){
            $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
            $relatedItems = $this->CC->parseItems($related['rows']);
            $params['relatedItems'] =  (object) $relatedItems;
        }
        
        return view('congress-and-events.updates')->with($params);    

    }       
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ersSatellite()
    {
        $results = $this->CC->getItem('ers-satellite');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] = $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        if($item[0]->hasRelatedArticles > 0){
            $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
            $relatedItems = $this->CC->parseItems($related['rows']);
            $params['relatedItems'] =  (object) $relatedItems;
        }
        
        return view('congress-and-events.satellite')->with($params);    

    }    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paris()
    {
        $results = $this->CC->getItem('ers-2018');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] = $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        if($item[0]->hasRelatedArticles > 0){
            $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
            $relatedItems = $this->CC->parseItems($related['rows']);
            $params['relatedItems'] =  (object) $relatedItems;
        }
        
        return view('congress-and-events.congress')->with($params);    

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
        if($item[0]->hasRelatedArticles > 0){
            $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
            $relatedItems = $this->CC->parseItems($related['rows']);
            $params['relatedItems'] =  (object) $relatedItems; 
        }    

        return view('articles.item')->with($params); 
    }

}
