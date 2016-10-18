<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Extensions\CloudCmsHelper as CC;
use App\Extensions\BingHelper as Bing;

class SearchController extends Controller
{
    public function search(Request $request){
        $CC = new CC();
        $results = $CC->search($request->input('query'));
        $items = $CC->parseItems($results['rows']);

        if(empty($items)){
            $params['items'] = false;
            return view('search.simple')->with($params); 
        }

        $bing = new Bing(); 
        $results =  $bing->search($request->input('query'));

        //formatting the array for it to fit the model
        foreach($results as $key => $result){
            $results[$key]['leadParagraph'] = $result['lead'];
            unset($results[$key]['lead']);
        }

        $bingItems = $CC->parseItems($results);

        $params['items'] = $items;
        //Pushing to the items the Bing Results if they have a url
        foreach($bingItems as $result) {
            if(!in_array($result->url, $items)){
                array_push($params['items'], $result);
            }
        }

        return view('search.simple')->with($params); 
        
    }

}