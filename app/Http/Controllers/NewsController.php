<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use Input;
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
        $page = Input::get('page', false);
        $limit = Input::get('limit', 25);

        $CC = new CC();
        
        $category = $CC->getItem('news');


        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($item[0]->url) || !isset($item[0]->uri)){
            $CC->setCanonical($category[0]['_qname'], 'the-society/news');
        }

        $toPaginate = $CC->getContentByProperty($this->property, $this->propertyValue);
        $pagination = $CC->paginate($toPaginate, $page, $limit);
        $params['pagination'] = $pagination;

        $results = $CC->getContentByProperty($this->property, $this->propertyValue, -1, $pagination->skip);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items;

        return response()->view('articles.news', $params)->setTtl(60 * 60 * 24 * 7); //caching a week

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authors()
    { 
        $CC = new CC();

        $category = $CC->getItem('the-ers-bloggers');

        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($item[0]->url) || !isset($item[0]->uri)){
            $CC->setCanonical($category[0]['_qname'], 'authors');
        }

        $results = $CC->getContentByProperty("_type", "ers:author", -1, false);
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

        $category = $CC->getItem('respiratory-worldwide');

        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($item[0]->url) || !isset($item[0]->uri)){
            $CC->setCanonical($category[0]['_qname'], 'the-society/news/respiratory-worldwide');
        }

        $results = $CC->getCategorySorted($this->respiratoryWorldWide, "_system.created_on", -1);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 
   
        return view('articles.news')->with($params); 

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexRespiratoryMatters()
    {
        $CC = new CC();
        $category = $CC->getItem('respiratory-matters');

        if($category == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        if(!isset($item[0]->url) || !isset($item[0]->uri)){
            $CC->setCanonical($category[0]['_qname'], 'the-society/news/respiratory-matters');
        }        

        $results = $CC->getCategorySorted($this->respiratoryMatters, "_system.created_on", -1);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 
   
        return view('articles.news')->with($params); 

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
            $CC->setCanonical($results->rows[0]->_qname);
        }

        if($item[0]['hasRelatedArticles'] > 0){
            $related = $CC->getRelatedArticle($item[0]['_qname']);
            $relatedItems = $CC->parseItems($related->rows);
            $params['relatedItems'] =  (object) $relatedItems;
        }

        if($item[0]['hasAuthor'] > 0){
            $author = $CC->getAuthor($item[0]['_qname']);
            if(!empty($author->rows)){      
                $authorItem = $CC->parseItems($author->rows);
                $params['author'] = (object) $authorItem[0];
            }
        }

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

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }
        
        //Slug should be unique, so we should get only one item
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0];

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $CC->setCanonical($results->rows[0]->_qname, 'authors'.$slug);
        }

        $items = $CC->getAuthoredArticles($params['item']->_qname);
        if(!empty($items->rows)){
            $authoredItems = $CC->parseItems($items->rows);  
            $params['items'] = (object) $authoredItems;
        }

        return view('articles.author')->with($params); 
    }

}
