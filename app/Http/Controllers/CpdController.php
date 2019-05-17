<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class CpdController extends Controller
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
    $results = $this->CC->getItem('cpd');
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

    return view('articles.item')->with($params); 
}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function phd()
  {
    $results = $this->CC->getItem('phd-overview');
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

    return view('professional.phd-overview')->with($params); 
}


    /**
     * Display a listing of the resource.
     *
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
          $params['relatedItems'] = $this->CC->parseItems($related['rows']);
      }

      $results = $this->CC->getAssociation($item[0]->_qname);
        $items = $this->CC->parseItems($results['rows']);
        $params['items'] =  $items;

        return view('articles.item')->with($params);
    }

}
