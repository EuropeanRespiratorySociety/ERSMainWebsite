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
        if($results == "invalid_token"){
            \File::cleanDirectory(env('CC_TOKEN_STORAGE_PATH'));
            return redirect(request()->fullUrl());
        }

        $items = $CC->parseItems($results->rows);

        if(empty($items)){
            $params['items'] = false;
            return view('search.simple')->with($params); 
        }

        $bing = new Bing(); 
        $results =  $bing->search($request->input('query'));

        $params['items'] = $items;
        foreach($results as $result) {
            if(!in_array($result['url'], $items)){
                array_push($params['items'], $result);
            }
        }

        return view('search.simple')->with($params); 
        
    }

}