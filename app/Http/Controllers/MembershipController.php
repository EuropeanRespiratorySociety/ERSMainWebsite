<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class MembershipController extends Controller
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
        $results = $this->CC->getItem('membership');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] = $item[0]; 

        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }

        $result = $this->CC->getItem('benefits-of-ers-membership');
        $item = $this->CC->parseItems($result['rows']);
        $items['benefits'] = (object) $item[0];
        $result = $this->CC->getItem('membership-categories-and-fees');
        $item = $this->CC->parseItems($result['rows']);
        $items['catAndFees'] = (object) $item[0];;
        $result = $this->CC->getItem('faqs');
        $item = $this->CC->parseItems($result['rows']);
        $items['faqs'] = (object) $item[0];;
        
        $params['items'] =  (object) $items;
        return view('society.membership')->with($params);
    }

}