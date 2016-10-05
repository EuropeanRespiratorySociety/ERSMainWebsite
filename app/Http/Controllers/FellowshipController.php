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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$page = Input::get('page', false);
        //$limit = Input::get('limit', 25);
        
        $CC = new CC();
        
        $category = $CC->getItem('fellowships');

        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($item[0]->url) || !isset($item[0]->uri)){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
        }

        //$toPaginate = $CC->getContentByProperty($this->property, $this->propertyValue);
        //$pagination = $CC->paginate($toPaginate, $page, $limit);
        //$params['pagination'] = $pagination;

        //$results = $CC->getContentByProperty($this->property, $this->propertyValue, -1, $pagination->skip);
        $results = $CC->getContentByProperty($this->property, $this->propertyValue, -1, false);
        $items = '';
        if(!empty($results->rows)){
            $items = $CC->parseItems($results->rows);
            shuffle($items);          
        }

        $params['items'] =  (object) $items;

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
        
        $CC = new CC();
        
        $category = $CC->getItem('short-term-research-training-fellowships');

        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($category[0]['url']) || !isset($category[0]['uri'])){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
        }

        //$toPaginate = $CC->getContentByProperty($this->property, $this->propertyValue);
        //$pagination = $CC->paginate($toPaginate, $page, $limit);
        //$params['pagination'] = $pagination;

        $results = $CC->getCategory($this->shortTerm);
        $items = '';
        if(!empty($results->rows)){
            $items = $CC->parseItems($results->rows);           
        }
   
        $params['fellowships'] =  (object) $items; 
        return view('professional.short-term-fellowships')->with($params);    

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexLongTerm()
    {
        //$page = Input::get('page', false);
        //$limit = Input::get('limit', 25);
        
        $CC = new CC();
        
        $category = $CC->getItem('long-term-research-fellowships');

        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($category[0]['url']) || !isset($category[0]['uri'])){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
        }

        //$toPaginate = $CC->getContentByProperty($this->property, $this->propertyValue);
        //$pagination = $CC->paginate($toPaginate, $page, $limit);
        //$params['pagination'] = $pagination;

        $results = $CC->getCategory($this->longTerm);
        $items = '';
        if(!empty($results->rows)){
            $items = $CC->parseItems($results->rows);           
        }
   
        $params['fellowships'] =  (object) $items; 
        return view('professional.long-term-fellowships')->with($params);    

    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexIndustry()
    {
        //$page = Input::get('page', false);
        //$limit = Input::get('limit', 25);
        
        $CC = new CC();
        
        $category = $CC->getItem('ers-fellowships-in-industry');

        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($category[0]['url']) || !isset($category[0]['uri'])){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
        }

        //$toPaginate = $CC->getContentByProperty($this->property, $this->propertyValue);
        //$pagination = $CC->paginate($toPaginate, $page, $limit);
        //$params['pagination'] = $pagination;

        $results = $CC->getCategory($this->industry);
        $items = '';
        if(!empty($results->rows)){
            $items = $CC->parseItems($results->rows);           
        }

        $params['fellowships'] =  (object) $items; 
   
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
        $CC = new CC();
        $results = $CC->getItem($slug);

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }
        
        //Slug should be unique, so we should get only one item
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0];

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }
        
        if($item[0]['hasRelatedArticles'] > 0){
            $related = $CC->getRelatedArticle($item[0]['_qname']);
            $relatedItems = $CC->parseItems($related->rows);
            $params['relatedItems'] =  (object) $relatedItems;
        }
        $category = $params['item']->category ?? false;
        if($category == "ERS Fellowships in Industry" ) {
            return view('professional.industry')->with($params);
        }
        return view('professional.fellowship')->with($params); 
    }

}

