<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class NewsController extends Controller
{
    protected $news = "o:c827cc6bf4de31ce385b";
    protected $property = "type";
    protected $propertyValue = "News";
    protected $respiratoryWorldWide = "o:286ec13da09faf57b3ae";
    protected $respiratoryMatters = "o:d571c1fa5c4b8ed6d7ac";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CC = new CC();
        $results = $CC->getContentByProperty($this->property, $this->propertyValue);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items;
        return view('articles.news')->with($params);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authors()
    {
        $CC = new CC();
        $results = $CC->getContentByProperty("_type", "ers:author");
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items;
        return view('articles.authors')->with($params);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexRespiratoryWorldWide()
    {
        $CC = new CC();
        $results = $CC->getCategorySorted($this->respiratoryWorldWide, "_system.created_on", -1);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 
        return view('articles.respiratory-world-wide')->with($params); 

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexRespiratoryMatters()
    {
        $CC = new CC();
        $results = $CC->getCategorySorted($this->respiratoryMatters, "_system.created_on", -1);
        $items = $CC->parseItems($results->rows);
   
        $params['items'] =  (object) $items; 
        return view('articles.respiratory-matters')->with($params); 

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

        $related = $CC->getRelatedArticle($item[0]['_qname']);
        $relatedItems = $CC->parseItems($related->rows);
        $params['relatedItems'] =  (object) $relatedItems;

        $author = $CC->getAuthor($item[0]['_qname']);
        $authorItem = $CC->parseItems($author->rows);
        $params['author'] = (object) $authorItem[0];

        return view('articles.item')->with($params); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAuthor($slug)
    {
        $CC = new CC();
        $results = $CC->getItem($slug);
        //Slug should be unique, so we should get only one item
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0];

        $items = $CC->getAuthoredArticles($params['item']->_qname);
        $authoredItems = $CC->parseItems($items->rows);
        $params['items'] = (object) $authoredItems;

        return view('articles.author')->with($params); 
    }

}
