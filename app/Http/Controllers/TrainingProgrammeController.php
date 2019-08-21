<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CC;

class TrainingProgrammeController extends Controller
{

    public function __construct() {
        $this->CC = new CC();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function thoracicUltrasound()
  { 
    $params = $this->setParamsByCategory('thoracic-ultrasound-training-programme');
    return view('professional.training-programme')->with($params);  
  }

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function endobronchialUltrasound()
    { 
      $params = $this->setParamsByCategory('endobronchial-ultrasound-certified-training-programme');
      return view('professional.training-programme')->with($params);  
    }

  /**
     * Set item (ers:category)
     * Set relatedArticle
     * Set items (ers:article with the $categoryName)
     * @return $params with all CloudCMS Infomation
     */
  private function setParamsByCategory($categoryName){
    $category = $this->CC->getPublishedItem($categoryName);
    $category = $this->CC->parseItems($category['rows']);
    $params['category'] = (object) $category[0];
    
    if(!$category[0]->url || !$category[0]->uri){
        $this->CC->setCanonical($category[0]->_qname);
    }

    $results = $this->CC->getAssociation($category[0]->_qname,'ers:category-association');
    $params['items'] =  $this->CC->parseItems($results['rows']);
    $items = $this->CC->parseItems($results['rows']);
    
    $sortedItems = array_values(array_sort($items, function ($value) {
      if($value->calendar) {
          return $value->calendar->timestamp;
      }
    }));
    $params['items'] = (object) $sortedItems; 
    return $params;
  }
}
