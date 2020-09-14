<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Illuminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

class RespiratoryDigestController extends Controller
{

    public function __construct() {
        $this->CC = new CC();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function index(Request $request)
  { 
    $isCovid19Page = false;
    /** 083f2e21cb0c286eeb91: id of sloukides (the article should be review) **/ 
    $listDigestArticleQuery = '{
            "_type" : "ers:digest-article",
            "unPublished": { "$ne": true },
            "_system.modified_by_principal_id": {
                $nin: ["083f2e21cb0c286eeb91"] 
            }
        }'; 

    if($request->has('covid19') && $request->query('covid19') == 'true') {
        $listDigestArticleQuery = '{
            "_type" : "ers:digest-article",
            "unPublished": { "$ne": true },
            "isCovid19" : true,
            "_system.modified_by_principal_id": {
                $nin: ["083f2e21cb0c286eeb91"] 
            }
        }'; 
        $isCovid19Page = true;
    }

    $item = $this->CC->getItem('respiratory-digests');
    $item = $this->CC->parseItems($item['rows']);
    $params['item'] = (object) $item[0];

    if(!$item[0]->url || !$item[0]->uri){
        $this->CC->setCanonical($item[0]->_qname);
    }

    $listDigestArticleResults = $this->CC->getContentByQuery($listDigestArticleQuery, 100, -1, false);
    $params['items'] = $this->CC->parseDigestItems($listDigestArticleResults['rows']);    
    $params['isCovid19Page'] = $isCovid19Page;
    return view('professional.respiratory-digests')->with($params);  
  }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, Request $request)
    {
        $isCovid19Page = false;
        if($request->has('covid19') && $request->query('covid19') == 'true') {
            $isCovid19Page = true;
        }
        $params['isCovid19Page'] = $isCovid19Page;

        $results = $this->CC->getItem($slug);
        $item = $this->CC->parseDigestItems($results['rows']);
        $params['item'] =  (object) $item[0]; 
        
        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }
        
        return view('professional.respiratory-digest')->with($params); 
    }
}
