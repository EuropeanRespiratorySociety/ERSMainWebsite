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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publications()
    { 
        return redirect('/#publications');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function community()
    { 
        return redirect('/#community');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function research()
    { 
        return redirect('/#research');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sciAndEduEvents()
    { 
        return redirect('/#scientific-and-educational-events');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function advocacy()
    { 
        return redirect('/#advocacy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function euAffairs()
    { 
        $field = "createdAt";
        $direction = 1;
        $CC = new CC();
        $results = $CC->getCategorySorted($this->euAffairs, $field, $direction);

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $CC->setCanonical($results->rows[0]->_qname, 'advocacy/eu-affairs');
        }

        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 
        return view('advocacy.eu-affairs')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function euProjects()
    { 
        $CC = new CC();
        $results = $CC->getCategory($this->euProjects);

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $CC->setCanonical($results->rows[0]->_qname, 'advocacy/eu-projects');
        }

        return view('advocacy.eu-projects')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grantsAndSponsorships()
    { 
        $CC = new CC();
        $results = $CC->getItem('grants-and-sponsorships');

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $CC->setCanonical($results->rows[0]->_qname, 'professional-development/grants-and-sponsorships');
        }

        $results = $CC->getCategory($params['item']->_qname);
        $items = $CC->parseItems($results->rows, true);
        $params['items'] =  (object) $items;
        return view('professional.grants-and-sponsorships')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function awards()
    { 
        $CC = new CC();
        $results = $CC->getItem('awards');

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $CC->setCanonical($results->rows[0]->_qname, 'the-society/who-we-are/awards');
        }

        $results = $CC->getCategory($params['item']->_qname);
        $items = $CC->parseItems($results->rows, true);
        $params['items'] =  (object) $items;
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
        
        return view('articles.item')->with($params); 
    }

    public function schema(){
        $CC = new CC();
        dd($CC->getSchema()->properties);
    }

}
