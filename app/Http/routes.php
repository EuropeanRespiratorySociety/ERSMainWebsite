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

    Route::get('test-sam2', 'CloudCms@requestTest2');
    Route::get('test-sam', 'CloudCms@requestTest');
	Route::Auth();
    
    Route::get('/', 'HomeController@index');

    Route::get('sam', function(){
    	return view('pages.blank-aside');
    });

    Route::get('the-society/assemblies', function(){
    	return view('society.assemblies');
    });

    Route::get('the-society/who-we-are', 'WhoWeAreController@index');
    Route::get('the-society/who-we-are/{slug}', 'WhoWeAreController@show');
    Route::get('publications', 'GeneralController@index');
    Route::get('publications/{slug}', 'GeneralController@show');


    Route::get('the-society/leadership', function(){
        return view('society.leadership');
    });

    Route::get('the-society/leadership/national-delegates', function(){
        return view('society.leadership.national-delegates');
    });

    Route::get('the-society/leadership/science-council', function(){
        return view('society.leadership.science-council');
    });

    Route::get('the-society/leadership/assembly-heads', function(){
        return view('society.leadership.assembly-heads');
    });

    Route::get('the-society/leadership/education-council', function(){
        return view('society.leadership.education-council');
    });

    Route::get('the-society/leadership/assembly-secretaries', function(){
        return view('society.leadership.assembly-secretaries');
    });

    Route::get('the-society/leadership/council', function(){
        return view('society.leadership.council');
    });

    Route::get('the-society/leadership/elections-2016', function(){
        return view('society.leadership.elections-2016');
    });

    Route::get('the-society/membership', function(){
        return view('society.membership');
    });

    Route::get('congress-and-events/ers-research-seminars', function(){
        return view('congress-and-events.ers-research-seminars');
    });







    //Route::get('the-society/who-we-are/executive-office', function(){
    	//return view('society.who-we-are.executive-office');
    //});

    Route::get('the-society/executive-office', function(){
        return view('society.executive-office');
    });

    Route::get('professional-development/courses', 'CourseController@index');

    Route::get('professional-development/courses/{slug}', 'CourseController@show');

    Route::get('professional-development/fellowships', function(){
        return view('professional.fellowships');
    });

    Route::get('professional-development/fellowship', function(){
        return view('professional.fellowship');
    });

    Route::get('advocacy/eu-affairs', function(){
        return view('advocacy.eu-affairs');
    });

    Route::get('advocacy/eu-projects', function(){
        return view('advocacy.eu-projects');
    });




    //Blog using CloudCms
    Route::get('cc', 'CourseController@index');
    Route::get('cc/{slug}', 'CourseController@show');

    Route::get('search/{query}', 'CloudCms@search');
    Route::get('full-search', 'CloudCms@fullSearch');

});
