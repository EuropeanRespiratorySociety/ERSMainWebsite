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
        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($item[0]->url) || !isset($item[0]->uri) || $item[0]->url == "false" || $item[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
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
        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($item[0]->url) || !isset($item[0]->uri) || $item[0]->url == "false" || $item[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
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
        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($item[0]->url) || !isset($item[0]->uri) || $item[0]->url == "false" || $item[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
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
        $category = $CC->parseItems($category->rows);
        $params['category'] = (object) $category[0];

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($item[0]->url) || !isset($item[0]->uri) || $item[0]->url == "false" || $item[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($category[0]['_qname'], $payload);
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

        $author = $CC->getAuthor($item[0]['_qname']);
        $authorItem = $CC->parseItems($author->rows);
        if(isset($authorItem[0])){
            $params['author'] = (object) $authorItem[0];
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

        $items = $CC->getAuthoredArticles($params['item']->_qname);
        $authoredItems = $CC->parseItems($items->rows);
        $params['items'] = (object) $authoredItems;

        return view('articles.author')->with($params); 
    }

}
