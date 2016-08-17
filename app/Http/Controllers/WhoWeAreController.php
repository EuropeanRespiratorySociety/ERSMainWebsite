<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class WhoWeAreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slug = "who-we-are";
        $CC = new CC();
        $results = $CC->getItem($slug);
        //Slug should be unique, so we should get only one item
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
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
        $CC = new CC();
        $results = $CC->getItem($slug);
        //Slug should be unique, so we should get only one item
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0];

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
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

}
