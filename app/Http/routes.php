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


//Special Routes
Route::group(['prefix' => 'errors'], function () {
	Route::get('{errorCode}', function ($errorCode) {
	    return view('errors.error',['error' => $errorCode]);
	});
});

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
    
    Route::get('/home', 'HomeController@index');
    
    //Blog using contentful
    Route::resource('blog', 'Blog');

	//General routing - View files need to follow the correct patern 
	Route::get('/{param1}/{param2}/{param3?}/{param4?}', function ($param1, $param2, $param3 = null, $param4 = null) {

			$params = display($param3, $param4);

			return view($param1.'.'.$param2)->with($params);
	});


	Route::get('/{param1?}/{param2?}', function ($param1 = null , $param2 = null ) {

	$params = display($param1, $param2);

    return view('pages.blank')->with($params);
	});

	
	function display($color, $screen){

			if($screen === null ){
				$screen = '';
			}

			if($screen == 'fullscreen' ){
				$screen = 'ers-full-screen';
			}

			if($screen == 'fullscreen-metanav' ){
				$screen = 'ers-full-screen-with-metanav';
			}

			if($screen == 'fullscreen-metanav-mainnav' ){
				$screen = 'ers-full-screen-with-metanav-and-main-nav';
			}


			if($color == 'white'){
				$color = 'ers-white-header';
			} elseif ($color == 'fullscreen') {
				$screen = 'ers-full-screen';
				$color = 'ers-blue-header';
			}elseif ($color == 'fullscreen-metanav') {
				$screen = 'ers-full-screen-with-metanav';
				$color = 'ers-blue-header';
			}elseif ($color == 'fullscreen-metanav-mainnav') {
				$screen = 'ers-full-screen-with-metanav-and-main-nav';
				$color = 'ers-blue-header';
			}
			else {
				$color = 'ers-blue-header';
			}


			$params = array(
					'color' 	=> $color,
					'display'	=> $screen,
				);

			return $params;

	}
});
