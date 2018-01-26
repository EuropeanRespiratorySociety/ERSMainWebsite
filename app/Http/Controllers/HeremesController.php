<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class GeneralController extends Controller
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
        $results = $this->CC->getItem('ers-hermes-examinations');
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

        return view('professional.hermes-examinations')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function National()
    { 
        $results = $this->CC->getItem('national-and-regional-society-cooperation');
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

        return view('professional.national')->with($params);
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

        return view('professional.hermes-examinations')->with($params);
    }

}
