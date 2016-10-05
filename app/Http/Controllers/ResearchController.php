<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

class ResearchController extends Controller
{

    protected $researchSeminars = "o:e4a6774fba1e72923263";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $CC = new CC();
        $results = $CC->getItem('research');

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $results = $CC->getCategory($params['item']->_qname);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 

        return view('research.research')->with($params);  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function summits()
    { 
        $CC = new CC();
        $results = $CC->getItem('ers-presidential-summits');

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $results = $CC->getCategory($params['item']->_qname);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 

        return view('research.summits')->with($params);  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function researchSeminars()
    {   
        $CC = new CC();
        
        $category = $CC->getItem('research-seminars');

        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
        }

        $results = $CC->getCategory($this->researchSeminars);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 

        return view('research.research-seminars')->with($params);  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function researchSeminarsRedirect()
    { 
        return redirect('/research/research-seminars');  
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
        return view('articles.item')->with($params); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRS($slug)
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
        
        return view('research.research-seminar')->with($params); 
    }

}
