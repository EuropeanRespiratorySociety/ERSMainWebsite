<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
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
  public function index()
  { 
    $item = $this->CC->getItem('respiratory-digests');
    $item = $this->CC->parseItems($item['rows']);
    $params['item'] = (object) $item[0];

    if(!$item[0]->url || !$item[0]->uri){
        $this->CC->setCanonical($item[0]->_qname);
    }

//     if($item[0]->hasRelatedArticles > 0){
//       $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
//       $relatedItems = $this->CC->parseItems($related['rows']);
//       $params['relatedItems'] =  (object) $relatedItems;
      
//   }

//     $results = $this->CC->getAssociation($item[0]->_qname);
//     $params['items'] =  $this->CC->parseItems($results['rows']);

    return view('professional.respiratory-digests')->with($params);  

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
        $item = $this->CC->parseDigestItems($results['rows']);
        $params['item'] =  (object) $item[0]; 
        
        if(!$item[0]->url || !$item[0]->uri){
            $this->CC->setCanonical($item[0]->_qname);
        }
        
        return view('professional.respiratory-digest')->with($params); 
    }
}
