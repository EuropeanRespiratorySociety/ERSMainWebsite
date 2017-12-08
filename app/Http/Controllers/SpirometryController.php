<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

class Spirometry extends Controller
{

    protected $spirometryProgramme = "o:4cfe4d088f2dda3db7ad";

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
        $results = $this->CC->getItem('spirometry-training-programme');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        $results = $this->CC->getAssociation($item[0]->_qname);
        $params['items'] = $this->CC->parseItems($results['rows']); 

        return view('professional.spirometry-programmes')->with($params);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showRS($slug)
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
        return view('research.spirometry-programme')->with($params); 
    }

}
