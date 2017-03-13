<?php

namespace App\Http\Controllers;

//Laravel Defaults
use App;
use Artisan;
use Illuminate\Http\Request;
use App\Http\Requests;
use Log;

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
    public function cache(Request $request){
        //param: url=https://www.ersnet.org/the/url/to/clean
        $url = $request->input('url', false);
        //param: all=true
        $all = $request->input('all', false);
        $cleaned = false;
        $message = '';

        if($url){
            //$cleaned = App::make('http_cache.store')->purge($url);
            //temporary fix
            $dir = App::make('http_cache.cache_dir');
            $httpcache = new \Symfony\Component\HttpKernel\HttpCache\Store($dir);
            $cleaned = $httpcache->purge($url);
            $cleaned ? $message = "The cache has been cleaned" : $message = "The cache has not been cleaned";
        }

        if($all){
            $cleaned = \File::cleanDirectory(app('http_cache.cache_dir'));
            Artisan::call('cache:clear');
            //Artisan::call('view:clear');
            $cleaned ? $message = "The cache has been emptied" : $message = "The cache has not been emptied";

        }

        Log::info('The cache url has been called by: '. $request->ip() . ' The method use is: ' . $request->method() . ' Message: '. $message);
        return $message;
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