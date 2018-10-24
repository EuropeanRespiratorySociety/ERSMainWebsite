<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

class ResearchController extends Controller
{

    protected $researchSeminars = "o:e4a6774fba1e72923263";

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
        $results = $this->CC->getItem('research');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        $results = $this->CC->getAssociation($item[0]->_qname);
        $params['items'] = $this->CC->parseItems($results['rows']); 

        return view('research.research')->with($params);  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function summits()
    { 
        $results = $this->CC->getItem('ers-presidential-summits');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        $results = $this->CC->getAssociation($params['item']->_qname);
        $params['items'] = $this->CC->parseItems($results['rows']);; 

        return view('research.summits')->with($params);  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function researchSeminars()
    {           
        $item = $this->CC->getItem('research-seminars');
        $item = $this->CC->parseItems($item['rows']);
        $params['category'] = (object) $item[0];

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        $results = $this->CC->getAssociation($this->researchSeminars);
        $params['items'] =  $this->CC->parseItems($results['rows']);

        return view('research.research-seminars')->with($params);  
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function CRC()
    {
        $results = $this->CC->getItem('clinical-research-collaborations');
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
        return view('research.crc')->with($params); 
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function taskForces()
    {
        $results = $this->CC->getItem('task-forces');
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
        return view('research.task-forces')->with($params); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRS($slug)
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
        return view('research.research-seminar')->with($params); 
    }

}
