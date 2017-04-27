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
        $page = Input::get('page', false);
        $limit = Input::get('limit', 25);
        $category = $this->CC->getItem('news');
        $params['category'] = $this->CC->parseItems($category['rows'])[0];
        if(!$params['category']->url || !$params['category']->uri){
            $this->CC->setCanonical($category[0]['_qname'], 'the-society/news');
        }

        $toPaginate = $this->CC->getContentByProperty($this->property, $this->propertyValue);
        $pagination = $this->CC->paginate($toPaginate, $page, $limit);
        $params['pagination'] = $pagination;

        $results = $this->CC->getContentByProperty($this->property, $this->propertyValue, -1, $pagination->skip);
        //dd($results);
        $params['items'] = $this->CC->parseItems($results['rows']);
        
        return response()->view('articles.news', $params)->setTtl(60 * 60 * 24 * 7); //caching a week

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authors()
    { 
        $category = $this->CC->getItem('the-ers-bloggers');
        $category = $this->CC->parseItems($category['rows']);
        $params['category'] = (object) $category[0];

        if(!$category[0]->url || !$category[0]->uri){
            $this->CC->setCanonical($category[0]->_qname, 'authors');
        }

        $results = $this->CC->getContentByProperty("_type", "ers:author", -1, false);
        $items = $this->CC->parseItems($results['rows']);
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
        $category = $this->CC->getItem('respiratory-worldwide');
        $category = $this->CC->parseItems($category['rows']);
        $params['category'] = (object) $category[0];

        if(!$category[0]->url || !$category[0]->uri){
            $this->CC->setCanonical($category[0]->_qname, 'the-society/news/respiratory-worldwide');
        }

        $results = $this->CC->getAssociationSorted($this->respiratoryWorldWide, 'ers:category-association', '_system.modified_on.ms', -1);
        $items = $this->CC->parseItems($results['rows']);
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
        $category = $this->CC->getItem('respiratory-matters');
        $category = $this->CC->parseItems($category['rows']);
        $params['category'] = (object) $category[0];

        if(!$category[0]->url || !$category[0]->uri){
            $this->CC->setCanonical($category[0]->_qname, 'the-society/news/respiratory-matters');
        }        

        $results = $this->CC->getAssociationSorted($this->respiratoryMatters,'ers:category-association', '_system.modified_on.ms', -1);
        $items = $this->CC->parseItems($results['rows']);
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

        if($item[0]->hasAuthor > 0){
            $author = $this->CC->getAssociation($item[0]->_qname, 'ers:author-association');

            if(!empty($author['rows'])){      
                $authorItem = $this->CC->parseItems($author['rows']);
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
        $results = $this->CC->getItem($slug);
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0];

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname, 'authors'.$slug);
        }

        $items = $this->CC->getAssociation($params['item']->_qname, 'ers:author-association');
        if(!empty($items['rows'])){
            $authoredItems = $this->CC->parseItems($items['rows']);  
            $params['items'] = (object) $authoredItems;
        }

        return view('articles.author')->with($params); 
    }

}
