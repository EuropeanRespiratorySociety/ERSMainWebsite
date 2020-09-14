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
        //begin covid section for special Covid-19 Breaking News
        $numberOfNews = 3;
        $covidResults = $this->CC->getPublishedItem("breaking-covid-19");
        $covidNews = null;
        if($covidResults['total_rows'] != 0){
            $numberOfNews = 2; //Normally news sections have 3 news by default but if there are breaking-covid-19 published on CloudCMS, we take this one for the third one
            $covidItem = $this->CC->parseItems($covidResults['rows']);
            $covidItem[0]->title = "COVID-19 " . $covidItem[0]->title;
            $covidItem[0]->image = $covidItem[0]->highResImage;
            $covidNews = (object) $covidItem[0];
        }
        
        $newsQuery = '{
            "availableOnHomepage": "true",
            "contentType":"article",
            "unPublished": { "$ne": true },
            "mainNews": { "$ne": true },
            "type":"News"
        }'; 
        $newResults = $this->CC->getContentByQuery($newsQuery, $numberOfNews, -1, false);
        $newItems = $this->CC->parseItems($newResults['rows']);
        foreach ($newItems as $key => $newItem) {
            $item = (object) $newItem;
            $sorted['news'][] = $item;  
        }
        //begin covid section for special Covid-19 Breaking News
        if($covidNews != null){
            $sorted['news'][] = $covidNews;
        }
        //end covid
        //end news section
       
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
