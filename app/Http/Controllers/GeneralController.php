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
    protected $grantsAndSponsorships = "o:fed7466ad04defc729de";

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
        $CC = new CC();
        $results = $CC->getCategory($this->euAffairs);
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
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 
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
        $results = $CC->getCategory($this->grantsAndSponsorships);
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 
        return view('professional.grants-and-sponsorships')->with($params);
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

        $related = $CC->getRelatedArticle($item[0]['_qname']);
        $relatedItems = $CC->parseItems($related->rows);
        $params['relatedItems'] =  (object) $relatedItems;
        return view('articles.item')->with($params); 
    }

}
