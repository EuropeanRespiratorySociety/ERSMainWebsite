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
    protected $longTerm = " o:35da974d3c05ca528f3f";

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
        $category = $CC->parseItems($category->rows);

        if(isset($category[0])){
            $params['category'] =  (object) $category[0];   
        } else{
            abort(404);
        }

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($item[0]->url) || !isset($item[0]->uri) || $item[0]->url == "false" || $item[0]->uri == "false"){
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
        $items = $CC->parseItems($results->rows);
        shuffle($items);
        $params['items'] =  (object) $items;

        return view('professional.fellowships')->with($params);

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
        $category = $CC->parseItems($category->rows);

        if(isset($category[0])){
            $params['category'] =  (object) $category[0];   
        } else{
            abort(404);
        }

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($category[0]['url']) || !isset($category[0]['uri']) || $category[0]['url'] == "false" || $category[0]['uri'] == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
        }

        //$toPaginate = $CC->getContentByProperty($this->property, $this->propertyValue);
        //$pagination = $CC->paginate($toPaginate, $page, $limit);
        //$params['pagination'] = $pagination;

        $results = $CC->getCategory($this->shortTerm);
        $items = $CC->parseItems($results->rows);
   
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
        $category = $CC->parseItems($category->rows);

        if(isset($category[0])){
            $params['category'] =  (object) $category[0];   
        } else{
            abort(404);
        }

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($category[0]['url']) || !isset($category[0]['uri']) || $category[0]['url'] == "false" || $category[0]['uri'] == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
        }

        //$toPaginate = $CC->getContentByProperty($this->property, $this->propertyValue);
        //$pagination = $CC->paginate($toPaginate, $page, $limit);
        //$params['pagination'] = $pagination;

        $results = $CC->getCategory($this->longTerm);
        $items = $CC->parseItems($results->rows);
   
        $params['fellowships'] =  (object) $items; 
        return view('professional.long-term-fellowships')->with($params);    

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
        //Slug should be unique, so we should get only one item
        $item = $CC->parseItems($results->rows);

        if(isset($item[0])){
            $params['item'] =  (object) $item[0];   
        } else{
            abort(404);
        }

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $related = $CC->getRelatedArticle($item[0]['_qname']);
        $relatedItems = $CC->parseItems($related->rows);
        $params['relatedItems'] =  (object) $relatedItems;
        return view('professional.fellowship')->with($params); 
    }

}

