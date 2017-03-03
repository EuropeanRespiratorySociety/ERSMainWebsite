<?php

namespace App\Http\Controllers;

//Laravel Defaults
use App;
use Artisan;
use Iluminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;

use App\Extensions\CloudCmsHelper as CC;

class MaintenanceController extends Controller
{
	public function __construct() {
        $this->CC = new CC();
    }  

    /**
    * Get the Content model from Cloud CMS and store it locally
    * In order to match the request to the model
    */
    public function schema(){
        $this->CC->setModel();
    }

    /**
    * Get the Content model from Cloud CMS and store it locally
    * In order to match the request to the model
    */
    public function unsetSchema(){
        $this->CC->unsetModel();
    }

    /**
    * Clean the whole cache or individual pages. The whole cache includes Larval's cache
    * as well as the Htpp cache, but not the views.
    *
    */
    public function cache(){
        //param: url=https://www.ersnet.org/the/url/to/clean
        $url = \Input::get('url', false);
        //param: all=true
        $all = \Input::get('all', false);
        $cleaned = false;

        if($url){
           $cleaned = App::make('http_cache.store')->purge($url);
        }

        if($all){
            $cleaned = \File::cleanDirectory(app('http_cache.cache_dir'));
            Artisan::call('cache:clear');
            //Artisan::call('view:clear');
            Log::info('The cache url has been called');
            return $cleaned ? "The cache has been emptied" : "The cache has not been emptied";

        }

        if(!$cleaned){
            return "The cache has not been cleaned";
           }
       return "The cache has been cleaned";
    }

    /**
    * Clean the views' cache.
    *
    */
    public function view(){
            Artisan::call('view:clear');
            return "The views are cleared";

    }
}