<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Extensions\CloudCmsHelper as CC;
use App\Extensions\DateHelper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->CC = new CC();
        $this->date = new DateHelper; 
    }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // //Old way to build the homePage (change for the new version the 01/01/2020)
    // public function index()
    // {
    //     $results = $this->CC->getContentByProperty("availableOnHomepage", "true", -1, false);
    //     $items = $this->CC->parseItems($results['rows']);
    //     $params['items'] =  $this->CC->sortHomepage($items);
    //     return response()->view('home.home', $params)->setTtl(60 * 60 * 24 * 7); //caching a week
    // }    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //HomePage Banner
        $sorted = [];
        $bannerQuery = '{
            "availableOnHomepage": "true",
            "contentType":"article",
            "unPublished": { "$ne": true },
            "mainNews": true
            }'; 
        $bannerResults = $this->CC->getContentByQuery($bannerQuery, 1, -1, false);
        $bannerItems = $this->CC->parseItems($bannerResults['rows']);
        foreach ($bannerItems as $key => $bannerItem) {
            $item = (object) $bannerItem;
            $sorted['mainNews'] = $item;
        }

        //News Section
        $newsQuery = '{
            "availableOnHomepage": "true",
            "contentType":"article",
            "unPublished": { "$ne": true },
            "mainNews": { "$ne": true },
            "type":"News"
        }'; 
        $newResults = $this->CC->getContentByQuery($newsQuery, 3, -1, false);
        $newItems = $this->CC->parseItems($newResults['rows']);
        foreach ($newItems as $key => $newItem) {
            $item = (object) $newItem;
            $sorted['news'][] = $item;  
        }
       
        //HomePage Sciences and Education
        $eventsResults = $this->CC->getHomePageEvents();
        $events = $this->CC->parseItems($eventsResults['rows'], true);
        $sortedEvents = $this->CC->sortItems($events);
        $calendarCounter = 0;
        foreach ($sortedEvents as $key => $eventItem) {
            $item = (object) $eventItem;
            if($this->date->isAlreadyPassed($item->eventDate) && $calendarCounter < 5){
                if(isset($sorted['firstEvent'])){
                    $sorted['calendar'][] = $item;  
                }else{
                    $sorted['firstEvent'] = $item;
                }
                $calendarCounter++;
            }
        }
    
        $params['items'] = $sorted;
        return response()->view('home.home', $params)->setTtl(60 * 60 * 24 * 7); //caching a week
    }    
}
