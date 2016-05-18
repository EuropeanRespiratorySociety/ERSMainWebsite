<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/cache-flush', function () {
	ResponseCache::flush();
	return "ok";
});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	//Route::get('logout', ['middleware' => 'doNotCacheResponse', 'uses' => 'Auth\AuthController@logout']);
	//Route::get('login', ['middleware' => 'doNotCacheResponse', 'uses' => 'Auth\AuthController@showLoginForm']);
	//Route::post('login', ['middleware' => 'doNotCacheResponse', 'uses' => 'Auth\AuthController@login']);
	Route::get('test-sam', 'CloudCms@requestTest');
	Route::Auth();
    
    Route::get('/', 'HomeController@index');

    Route::get('sam', function(){
    	return view('pages.blank-aside');
    });

    Route::get('the-society/assemblies', function(){
    	return view('society.assemblies');
    });

    Route::get('the-society/who-we-are', function(){
    	return view('society.who-we-are');
    });

    //Route::get('the-society/who-we-are/executive-office', function(){
    	//return view('society.who-we-are.executive-office');
    //});

    Route::get('the-society/executive-office', function(){
        return view('society.executive-office');
    });

    Route::get('professional-development/ers-courses', function(){
        return view('professional.ers-courses');
    });

    //Blog using CloudCms
    Route::get('cc', 'CloudCms@index');
    Route::get('cc/{slug}', 'CloudCms@show');

    Route::get('search/{query}', 'CloudCms@search');
    Route::get('full-search', 'CloudCms@fullSearch');

});
