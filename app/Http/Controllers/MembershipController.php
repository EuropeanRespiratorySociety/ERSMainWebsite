<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $CC = new CC();
        $results = $CC->getItem('membership');

        if($results == "invalid_token"){
            $CC->deleteToken();
            return redirect(request()->fullUrl());
        }

        $item = $CC->parseItems($results->rows);
        $params['item'] =  (object) $item[0]; 

        if(!isset($results->rows[0]->url) || !isset($results->rows[0]->uri)){
            $uri= request()->path();
            $url = "https://www.ersnet.org/".$uri;
            $payload = json_encode(['url' => $url, 'uri' => $uri]);
            $CC->setCanonical($results->rows[0]->_qname, $payload);
        }

        $result = $CC->getItem('benefits-of-ers-membership');
        $item = $CC->parseItems($result->rows);
        $items['benefits'] = (object) $item[0];
        $result = $CC->getItem('membership-categories-and-fees');
        $item = $CC->parseItems($result->rows);
        $items['catAndFees'] = (object) $item[0];;
        $result = $CC->getItem('faqs');
        $item = $CC->parseItems($result->rows);
        $items['faqs'] = (object) $item[0];;
        
        $params['items'] =  (object) $items;
        return view('society.membership')->with($params);
    }

}