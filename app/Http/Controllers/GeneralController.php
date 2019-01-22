<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class GeneralController extends Controller
{

    protected $euProjects = "o:b1b2cbebec4c8076ecb8";
    protected $euAffairs = "o:ce780883918ebe8c7031";
    protected $curriculmDesign = "o:b9ac32d7faeff62b1bd4";


    public function __construct() {
        $this->CC = new CC();
    }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @todo add category in CC 
     */
    public function euAffairs()
    { 
        $type = 'ers:category-association';
        $field = "_system.created_on";
        $direction = -1;
        // The content of the cat is not yet managed in CC
        // if(!$params['category']->url || !$params['category']->uri)){
        //     $this->CC->setCanonical($params['category']->_qname, 'advocacy/eu-affairs');
        // }

        $results = $this->CC->getAssociationSortedCreatedBy($this->euAffairs, $type, $field, $direction);
        $items = $this->CC->parseItems($results['rows']);
        $params['items'] = $items; 

        return view('advocacy.eu-affairs')->with($params);
    }

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    * @todo add category in CC 
    */
    public function euProjects()
    { 
        // The content of the cat is not yet managed in CC
        // if(!$params['category']->url || !$params['category']->uri)){
        //     $this->CC->setCanonical($params['category']->_qname, 'advocacy/eu-affairs');
        // }

        $results = $this->CC->getAssociation($this->euProjects);
        $items = $this->CC->parseItems($results['rows']);
        $params['items'] = $items; 

        return view('advocacy.eu-projects')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grantsAndSponsorships()
    { 
        $results = $this->CC->getItem('grants-and-sponsorships');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] = $item[0]; 

        $results = $this->CC->getAssociation($params['item']->_qname);
        $items = $this->CC->parseItems($results['rows']);
        $params['items'] = $items;
        return view('professional.grants-and-sponsorships')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function curriculmDesign()
    { 
      $results = $this->CC->getItem('ers-curriculum-design-a-summary-of-projects');
      $item = $this->CC->parseItems($results['rows']);
      $params['item'] =  (object) $item[0]; 

      if(!$item[0]->url || !$item[0]->uri){
          $this->CC->setCanonical($item[0]->_qname);
      }

      if($item[0]->hasRelatedArticles > 0){
          $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
          $params['relatedItems'] =  (object) $relatedItems;
      }

      $results = $this->CC->getAssociation($item[0]->_qname);
        $items = $this->CC->parseItems($results['rows']);
        $params['items'] =  $items;

        return view('professional.curriculm-design-projects')->with($params);
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function awards()
    { 
        $results = $this->CC->getItem('awards');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 
        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        //$results = $this->CC->getAssociation($item[0]->_qname);
        //$items = $this->CC->parseItems($results['rows']);
        //temporary fix
        $params['items'] =  [];
        
        return view('society.awards')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function goldMedals()
    { 
        $results = $this->CC->getItem('gold-medals');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        $results = $this->CC->getAssociation($item[0]->_qname);
        $items = $this->CC->parseItems($results['rows']);
        $params['items'] =  $items;

        return view('society.awards')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function specialHonours()
    { 
        $results = $this->CC->getItem('special-honours');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        //temporary fix
        //$results = $this->CC->getAssociation($item[0]->_qname);
        //Maybe pass a param to identify that it is a category
        //$items = $this->CC->parseItems($results['rows'], true);
        //$params['items'] =  $items;
        $params['items'] =  [];

        return view('society.awards')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function researchExcellence()
    { 
        $results = $this->CC->getItem('research-excellence');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        $results = $this->CC->getAssociation($item[0]->_qname);
        $items = $this->CC->parseItems($results['rows']);
        $params['items'] =  $items;

        return view('society.awards')->with($params);
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
        $params['item'] = $item[0];

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

}
