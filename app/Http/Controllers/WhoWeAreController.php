<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class WhoWeAreController extends Controller
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
        $slug = "who-we-are";
        $results = $this->CC->getItem($slug);
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $CC->setCanonical($item[0]->_qname);
        }

        return view('articles.item')->with($params); 

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
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($item[0]->_qname, $payload);
        }
        
        if($item[0]->hasRelatedArticles > 0){
            $related = $this->CC->getRelatedArticle($item[0]->_qname);
            $relatedItems = $this->CC->parseItems($related['rows']);
            $params['relatedItems'] =  (object) $relatedItems;
        }
        return view('articles.item')->with($params); 
    }

}
