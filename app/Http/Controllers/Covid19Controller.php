<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

class Covid19Controller extends Controller
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
        $results = $this->CC->getItem("novel-coronavirus-outbreak");
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0];

        return view('covid.main')->with($params); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function covidWeekly()
    {
        $results = $this->CC->getItem("covid-19-weekly");
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0];

        return view('covid.weeklyNews')->with($params); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function covidGuidelines()
    {
        $results = $this->CC->getItem("covid-19-guidelines-and-recommendations-directory");
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0];

        return view('covid.guidelinesRecommendations')->with($params); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBlog()
    { 
        $item = $this->CC->getItem('covid-19-blog');
        $item = $this->CC->parseItems($item['rows']);
        $params['item'] = (object) $item[0];
        $listBlogArticleQuery = '{
           "_type" : "ers:covid-19-blog",
           "unPublished": { "$ne": true }
        }'; 
        $listBlogArticleResults = $this->CC->getContentByQuery($listBlogArticleQuery, 100, -1, false);
        $params['items'] = $this->CC->parseDigestItems($listBlogArticleResults['rows']);
        return view('covid.blogs')->with($params); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBlog($slug)
    {
        $results = $this->CC->getItem($slug);
        $item = $this->CC->parseDigestItems($results['rows']);
        $params['item'] =  (object) $item[0]; 
        
        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }
        
        return view('covid.blog')->with($params); 
    }
}
