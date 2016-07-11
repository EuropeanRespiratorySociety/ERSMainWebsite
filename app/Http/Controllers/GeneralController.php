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
    public function community()
    { 
        return redirect('/#community');
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

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
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
        $items = $CC->parseItems($results->rows);
        $params['items'] =  (object) $items; 

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
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
        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $results = $CC->getCategory($params['item']->_qname);
        $courses = $CC->parseItems($results->rows, true);
        $params['items'] =  (object) $courses;
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

        // == false set in purpose as CC sets the field to "false" wich is a string...
        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri) || $results->rows[0]->url == "false" || $results->rows[0]->uri == "false"){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $related = $CC->getRelatedArticle($item[0]['_qname']);
        $relatedItems = $CC->parseItems($related->rows);
        $params['relatedItems'] =  (object) $relatedItems;
        return view('articles.item')->with($params); 
    }

}
