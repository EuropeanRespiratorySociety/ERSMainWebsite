<?php

namespace App\Http\Controllers;

use CC;
//Laravel Defaults
use Iluminate\Http\Request;
//use App\Http\Requests\Request;

use App\Extensions\CloudCmsHelper as CCH;
use App\Extensions\CloudCmsParser as CCP;
use AlfredoRamos\ParsedownExtra\Facades\ParsedownExtra as Markdown;

//Respiratory Failure and Mechanical Ventilation Controller
class EventController extends Controller
{
    public function __construct() {
        $this->CCH = new CCH();
        $this->CCP = new CCP();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function rfmvIndex()
  { 
    $results = $this->CCH->getItem('ers-respiratory-failure-and-mechanical-ventilation-conference');
    $params = $this->buildParamsModel($results['rows']);
    return view('congress-and-events.event-main')->with($params);    
  }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rfmvShow($slug)
    {
        $results = $this->CCH->getItem($slug);
        $params = $this->buildParamsModel($results['rows']);
        $params['landingPage'] = (object)   array('title' => 'all RF&MV', 'link' => 'congress-and-events/ers-respiratory-failure-and-mechanical-ventilation-conference');
        return view('congress-and-events.event')->with($params); 
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  public function smallEventIndex()
  { 
    $results = $this->CCH->getItem('ers-small-event-example');
    $params = $this->buildParamsModel($results['rows']);
    return view('congress-and-events.event-main')->with($params);    
  }

  /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function smallEventShow($slug)
    {
        $results = $this->CCH->getItem($slug);
        $params = $this->buildParamsModel($results['rows']);
        $params['landingPage'] = (object)   array('title' => 'all Small Event', 'link' => 'congress-and-events/ers-small-event-example');
        return view('congress-and-events.event')->with($params); 
    }


    private function buildParamsModel($article){
        $item = $this->CCH->parseItems($article);
        $params['item'] =  (object) $item[0]; 
        
        if(!$item[0]->url || !$item[0]->uri){
            $this->CCH->setCanonical($item[0]->_qname);
        }
        $params['relatedItems'] = false;
        if($item[0]->related){
            foreach($item[0]->related as $relatedItem){
                if(isset($relatedItem->highResImage)){
                    $img = CC::nodes()->getImage($relatedItem->highResImage->qname);
                    $relatedItem->highResImage = $img->imageUrl."?name=image1800&size=1800"."&v=".$item[0]->_system->changeset;
                }
                if(isset($relatedItem->title)){
                    $relatedItem->title = $this->CCP->formatTitle($relatedItem->title);
                }
                if(isset($relatedItem->leadParagraph)){
                    $relatedItem->leadParagraph = Markdown::parse($relatedItem->leadParagraph);
                }
            }
            $params['relatedItems'] =  (object) $item[0]->related;
        }
        return $params;
    }
}
