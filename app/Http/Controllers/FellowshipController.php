<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use Input;
use App\Extensions\CloudCmsHelper as CC;

class FellowshipController extends Controller
{
    protected $property = "contentType";
    protected $propertyValue = "event_fellowship";
    protected $shortTerm = "o:aa1d863fcbb1c83e06c3";
    protected $longTerm = "o:35da974d3c05ca528f3f";
    protected $industry = "o:12dec9f25c7624b468b8";

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
        
        $category = $this->CC->getItem('fellowships');
        $category = $this->CC->parseItems($category['rows']);            
        $params['category'] = (object) $category[0];

        if(!$params['category']->url || !$params['category']->uri){
            $this->CC->setCanonical($params['category']->_qname, 'professional-development/fellowships');
        }

        //$toPaginate = $this->CC->getContentByProperty($this->property, $this->propertyValue);
        //$pagination = $this->CC->paginate($toPaginate, $page, $limit);
        //$params['pagination'] = $pagination;
        //$results = $this->CC->getContentByProperty($this->property, $this->propertyValue, -1, $pagination->skip);
        // $results = $this->CC->getContentByProperty($this->property, $this->propertyValue, -1, false);
        // $items = '';
        // if(!empty($results['rows'])){
        //     $items = $this->CC->parseItems($results['rows']);
        //     shuffle($items);          
        // }
        // $params['items'] =  (object) $items;

        return view('professional.simple-fellowships')->with($params);

    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexShortTerm()
    { 
        //$page = Input::get('page', false);
        //$limit = Input::get('limit', 25);

        $category = $this->CC->getItem('short-term-research-training-fellowships');
        $category = $this->CC->parseItems($category['rows']);
        $params['category'] = (object) $category[0];

        if(!$params['category']->url || !$params['category']->uri){
             $this->CC->setCanonical($params['category']->_qname, 'professional-development/fellowships/short-term-research-training-fellowships');
        }

        $results = $this->CC->getCategory($this->shortTerm);
        
        $items = '';
        if(!empty($results['rows'])){
            $items = $this->CC->parseItems($results['rows']);           
        }
        $params['items'] = $items; 

        return view('professional.short-term-fellowships')->with($params);    

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexLongTerm()
    {   
        $category = $this->CC->getItem('long-term-research-fellowships');
        $category = $this->CC->parseItems($category['rows']);
        $params['category'] = (object) $category[0];

        if(!$params['category']->url || !$params['category']->uri){
             $this->CC->setCanonical($params['category']->_qname, 'professional-development/fellowships/long-term-research-fellowships');
        }

        $results = $this->CC->getCategory($this->longTerm);
        
        $items = '';
        if(!empty($results['rows'])){
            $items = $this->CC->parseItems($results['rows']);           
        }
        $params['items'] =  $items; 

        return view('professional.long-term-fellowships')->with($params);    

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexIndustry()
    {   
        $category = $this->CC->getItem('ers-fellowships-in-industry');
        $category = $this->CC->parseItems($category['rows']);
        $params['category'] = $category[0];

        if(!$params['category']->url || !$params['category']->uri){
            $this->CC->setCanonical($params['category']->_qname, 'professional-development/fellowships/ers-fellowships-in-industry');
        }

        $results = $this->CC->getCategory($this->industry);
        
        $items = '';
        if(!empty($results['rows'])){
            $items = $this->CC->parseItems($results['rows']);           
        }    
        $params['items'] = $items; 
   
        return view('professional.industry-fellowships')->with($params);    

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
        
        //Slug should be unique, so we should get only one item
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0];

        if(!$params['item']->url || !$params['item']->uri){
             $this->CC->setCanonical($params['item']->category->qname, 'the-society/news');
        }
        
        if($item[0]->hasRelatedArticles > 0){
            $related = $this->CC->getRelatedArticle($item[0]->_qname);
            $relatedItems = $this->CC->parseItems($related['rows']);
            $params['relatedItems'] =  (object) $relatedItems;
        }

        $category = $params['item']->category->title ?? false;
        if($category == "ERS Fellowships in Industry" ) {
            return view('professional.industry')->with($params);
        }
        return view('professional.fellowship')->with($params); 
    }

}

