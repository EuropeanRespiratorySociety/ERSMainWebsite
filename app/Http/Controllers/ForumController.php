<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

class ForumController extends Controller
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
    $item = $this->CC->getItem('coronavirus-forum');
    $item = $this->CC->parseItems($item['rows']);
    $params['item'] = (object) $item[0];

    $listForumArticleQuery = '{
        "_type" : "ers:forum-article",
        "unPublished": { "$ne": true }
    }'; 
    $listForumArticleResults = $this->CC->getContentByQuery($listForumArticleQuery, 100, -1, false);
    $params['items'] = $this->CC->parseItems($listForumArticleResults['rows']);
    return view('forum.main')->with($params);  

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
        
        return view('forum.article-discussion')->with($params); 
    }
}
