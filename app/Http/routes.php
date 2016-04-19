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
	
	Route::Auth();
    
    Route::get('/', 'HomeController@index');
    
    //Blog using contentful
    Route::resource('blog', 'Blog');    

    //Blog using CloudCms
    Route::get('cc', 'CloudCms@index');
    //Route::get('cc', 'CloudCms');

});
