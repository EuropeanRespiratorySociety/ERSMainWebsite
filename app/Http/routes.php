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

//this route will be use as a web hook
//to purge we need the full url (http://...)
Route::get('cache', 'MaintenanceController@cache');

//Get the model
Route::get('schema:set', 'MaintenanceController@schema');
Route::get('view:clear', 'MaintenanceController@view');
//Purge the model
Route::get('schema:clear', 'MaintenanceController@unsetSchema');

//////DANGER NEED TOKEN CSRF CHECK -> Cached value
Route::post('search', 'SearchController@search');



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
	Route::Auth();
    
    Route::get('/', 'HomeController@index');

    //The order matters!!!
Route::group(['prefix' => 'the-society/who-we-are'], function () { 
    Route::get('/', 'WhoWeAreController@index');
    Route::get('executive-office', function(){ return view('society.executive-office');});
    Route::get('leadership', function(){ return view('society.leadership');});
    Route::get('awards', 'GeneralController@awards'); 
    Route::get('awards/{slug}', 'GeneralController@show'); 
    Route::group(['prefix' => 'leadership'], function () { 
        Route::get('national-delegates', function(){return view('society.leadership.national-delegates');});
        Route::get('science-council', function(){return view('society.leadership.science-council');});
        Route::get('assembly-heads', function(){return view('society.leadership.assembly-heads');});
        Route::get('education-council', function(){return view('society.leadership.education-council');});
        Route::get('assembly-secretaries', function(){return view('society.leadership.assembly-secretaries');});
        Route::get('council', function(){return view('society.leadership.council');});
        Route::get('advocacy-council', function(){return view('society.leadership.advocacy-council');});
        Route::get('/{slug}', 'WhoWeAreController@show'); 
    });
    Route::get('contact', function(){ return view('society.contact');});
    Route::get('/{slug}', 'WhoWeAreController@show');
});    

Route::group(['prefix' => 'the-society/news'], function () {
    Route::get('/', 'NewsController@index');
    Route::get('respiratory-worldwide', 'NewsController@indexRespiratoryWorldWide');
    Route::get('respiratory-matters', 'NewsController@indexRespiratoryMatters');
    Route::get('respiratory-worldwide/{slug}', 'NewsController@show');    
    Route::get('respiratory-matters/{slug}', 'NewsController@show');    
    Route::get('/{slug}', 'NewsController@show');
});

//Few redirects to avoid user missbehaviours
    Route::get('community', 'RedirectController@community');
    Route::get('scientific-and-educational-events', 'RedirectController@sciAndEduEvents');
    Route::get('publications', 'RedirectController@publications');
    Route::get('professional-development', 'RedirectController@professionalDevelopment');
    Route::get('advocacy', 'RedirectController@advocacy');
    
    Route::get('publications/{slug}', 'GeneralController@show');

    Route::get('the-society/membership', 'MembershipController@index');
    Route::get('the-society/membership/{slug}', "GeneralController@show");
    Route::get('the-society/assemblies', function(){
        return view('society.assemblies');
    });

Route::group(['prefix' => 'congress-and-events'], function () {
    Route::get('ers-research-seminars', 'RedirectController@researchSeminars');
    Route::get('ers-presidential-summits', 'ResearchController@summits');
    Route::get('ers-presidential-summits/{slug}', 'ResearchController@showRS');
    Route::get('the-lung-science-conference', 'LscController@index');
    Route::get('the-lung-science-conference/{slug}', 'LscController@show');
    Route::get('events-calendar', 'CalendarController@index');
    Route::get('ers-2018', 'LscController@paris');
    Route::get('/{slug}', 'GeneralController@show');
});

Route::group(['prefix' => 'professional-development'], function () {
    Route::get('courses', 'CourseController@index');
    Route::get('courses/{slug}', 'CourseController@show');
    Route::group(['prefix' => 'fellowships'], function () {
        Route::get('short-term-research-training-fellowships', 'FellowshipController@indexShortTerm');
        Route::get('short-term-research-training-fellowships/{slug?}', 'FellowshipController@indexShortTerm');
        Route::get('long-term-research-fellowships', 'FellowshipController@indexLongTerm');
        Route::get('long-term-research-fellowships/{slug?}', 'FellowshipController@indexLongTerm');
        Route::get('ers-fellowships-in-industry', 'FellowshipController@indexIndustry');
        Route::get('ers-fellowships-in-industry/{slug}', 'FellowshipController@show');
        Route::get('/', 'FellowshipController@index'); 
        Route::get('/{slug}', 'FellowshipController@show');
    });    
    Route::get('grants-and-sponsorships', 'GeneralController@grantsAndSponsorships');
    Route::get('grants-and-sponsorships/{slug}', 'GeneralController@show');
    Route::get('/{slug}', 'GeneralController@show'); //acreditation uses this route   
});

    Route::get('research', 'RedirectController@research'); 
    Route::get('research/research-seminars', 'ResearchController@researchSeminars'); 
    Route::get('research/research-seminars/{slug}', 'ResearchController@showRS'); 
    Route::get('research/{slug}', 'ResearchController@show');   
    

    Route::get('advocacy/eu-affairs', 'GeneralController@euAffairs');
    Route::get('advocacy/eu-affairs/{slug}', 'GeneralController@show');
    Route::get('advocacy/eu-projects', 'GeneralController@euProjects');
    Route::get('advocacy/policy-areas', function(){
        return view('advocacy.policy-areas');
    });
    Route::get('advocacy/policy-areas/{slug}', 'GeneralController@show');
    Route::get('advocacy/{slug}', 'GeneralController@show');
    Route::get('related/{slug}', 'GeneralController@show');

    Route::get('authors', 'NewsController@authors');
    Route::get('authors/{slug}', 'NewsController@showAuthor');

    //Route::get('cc', 'CloudCms@requestTest');
    Route::get('full-search', 'CloudCms@fullSearch');

});
