<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class CourseController extends Controller
{
    protected $courses = 'o:f913cff03624ac461283'; //courses category node
    protected $educationalActivities = "";

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
        $results = $this->CC->getItem('courses');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] = $item[0]; 

        if(!$item[0] || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname, 'professional-development/courses');
        }

        $results = $this->CC->getAssociation($params['item']->_qname, 'ers:category-association', 50);
        $items = $this->CC->parseItems($results['rows']);
        $sorted = $this->CC->sortItems($items);
        $params['items'] =  $sorted; 
        return view('professional.courses')->with($params);    
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
            $this->CC->setCanonical($item[0]->_qname, 'professional-development/courses/'.$slug);
        }

        if($item[0]->hasRelatedArticles > 0){
            $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
            $params['relatedItems'] = $this->CC->parseItems($related['rows']);
        }

        if($params['item']->contentType == "event_course_ebus" ){
            return view('professional.ebus')->with($params);
        }
        return view('professional.course')->with($params); 
    }

}
