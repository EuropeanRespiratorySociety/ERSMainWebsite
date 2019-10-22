<?php

namespace App\Http\Controllers;

//Laravel Defaults
use Iluminate\Http\Request;
use App\Http\Requests;

use App\Extensions\CloudCmsHelper as CC;
use Carbon\Carbon;

class CpdController extends Controller
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
        $results = $this->CC->getItem('cpd');
        $item = $this->CC->parseItems($results['rows']);
        $params['item'] =  (object) $item[0];

        if($item[0]->hasRelatedArticles > 0){
            $related = $this->CC->getAssociationSorted($item[0]->_qname, 'ers:related-association');
            $items = $this->CC->parseItems($related['rows']);
            foreach($items as $index => $item){
                $item->modules = $this->prepareModules($item->diseaseModules);
                }
            $params['items'] =  (object) $items;
        }
        
        return view('professional.cpd')->with($params);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function phd()
    {
        $results = $this->CC->getItem('phd-overview');
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
        
        return view('professional.phd-overview')->with($params); 
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRecommendation($qname)
    { 
        $related = $this->CC->getAssociationSorted($qname, 'ers:article-module-association');
        $items = $this->CC->parseItems($related['rows']);
        $sortedItems = array_values(array_sort($items, function ($value) {
            if($value->calendar) {
                return $value->calendar->timestamp;
            }
            //return the current date + 5 years (for the items without eventDate)
            return ((Carbon::now())->addYears(5))->timestamp;
          }));
        $htmlResult = ""; 
        
        if(count($sortedItems) == 0){
            $htmlResult .= "No results";
        }else{ 
            foreach($sortedItems as $index => $item){
                $type = $item->type;
                if($item->_type == "ers:digest-article"){
                    $type = "Respiratory digest";
                }
                $flag = $item->fullyBooked == true ? 'Fully Booked' : '';
                if($flag == ''){
                    $flag = $item->flags->text != false ? $item->flags->text : ''; 
                }
                $articleStyle = "flex-basis: 70%;margin-top: 10px;padding-right: 132px; min-height:100px";
                if($item->image == false){
                    $articleStyle = "flex-basis: 100%;margin-top: 10px;";
                }
                $htmlResult .= '<div class="card card-event" style="font-family: DinPro,sans-serif;">';
                $htmlResult .=      '<div style="display: flex; flex-direction: row; padding: 10px 15px 5px;">';
                $htmlResult .=          '<div>'.$type.'</div>';
                $htmlResult .=          '<div style="flex-grow: 1 !important; -webkit-box-flex:1 !important;"></div>';
                $htmlResult .=          '<div style="color:#cf003d">'.$flag.'</div>';
                $htmlResult .=      '</div>';
                $htmlResult .=      '<div style="padding-bottom: 54px; ">';
                $htmlResult .=          '<article class="card-content text-left" style="'.$articleStyle.'">';
                $htmlResult .=              '<h3 class="title" style="margin-bottom:4px;">';
                if($item->uri != false){
                    $htmlResult .=              '<a href='.$item->uri.' target="_blank">'.$item->title.'</a>';
                }else{
                    $htmlResult .= $item->title;
                }
                $htmlResult .=              '</h3>';
                
                if($item->eventLocation != false){
                    $htmlResult .=          '<p class="place" style="padding-bottom: 3px;"><span class="icon s7-map-marker"></span> '.$item->eventLocation.'</p>';
                }
                if($item->eventDates != false){
                    $htmlResult .=          '<p class="date"><span class="icon s7-date"></span> '.$item->eventDates.'</p>';
                }
                if($item->image != false){
                    $htmlResult .=          '<figure style="position: absolute; top:40px; right:15px; bottom:auto; left: auto; z-index:1; width:100px; height:100px; overflow: hidden; border-radius: 4px;">';
                    $htmlResult .=              '<img style="position: absolute; height: auto; width: 200px; top: 50%; left: 50%; transform: translate(-50%,-50%);" src="'.$item->image.'"/>';
                    $htmlResult .=          '</figure>';
                }
                $htmlResult .=          '</article>';
                $htmlResult .=      '</div>';
                if($item->uri != false){
                    $htmlResult .=      '<div class="card-action clearfix" style="position: absolute; right:0;bottom: 0;"> ';
                    $htmlResult .=          '<a href="'.$item->uri.'" class="btn btn-register" target="_blank">more</a>';
                    $htmlResult .=      '</div>';
                }
                $htmlResult .= '</div>';
            }
        }
        return $htmlResult;
    }

    private function prepareModules($diseaseModules){
        $result = [] ;
        if($diseaseModules){
            //split the array of modules to several arrays of 10 modules each
            $modulesChunk = array_chunk($diseaseModules,10);
            $first = 1;
            $last = 0;
            foreach($modulesChunk as $index => $modules){
                $last = $last + count($modules);
                $uiModules = new UiModules($first, $last, $modules);
                $first = $first + count($modules);
                array_push($result, $uiModules);
            }
        }
        return $result;
    }

}

class UiModules
{
    public function __construct($first, $last, $modules)
    {
        $this->modules = $modules;
        $this->first = $first;
        $this->last = $last;
        $this->sectionLabel = "Modules $first-$last";
    }
}
