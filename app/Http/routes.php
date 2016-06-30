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


/*Route::get('/cache-flush', function () {
	ResponseCache::flush();
	return "ok";
});*/




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
    Route::get('the-society/who-we-are', 'WhoWeAreController@index');
    Route::get('the-society/who-we-are/executive-office', function(){ return view('society.executive-office');});
    Route::get('the-society/who-we-are/leadership', function(){ return view('society.leadership');});
    Route::get('the-society/who-we-are/leadership/national-delegates', function(){return view('society.leadership.national-delegates');});
    Route::get('the-society/who-we-are/leadership/science-council', function(){return view('society.leadership.science-council');});
    Route::get('the-society/who-we-are/leadership/assembly-heads', function(){return view('society.leadership.assembly-heads');});
    Route::get('the-society/who-we-are/leadership/education-council', function(){return view('society.leadership.education-council');});
    Route::get('the-society/who-we-are/leadership/assembly-secretaries', function(){return view('society.leadership.assembly-secretaries');});
    Route::get('the-society/who-we-are/leadership/council', function(){return view('society.leadership.council');});
    Route::get('the-society/who-we-are/leadership/elections-2016', function(){return view('society.leadership.elections-2016');});
    Route::get('the-society/who-we-are/{slug}', 'WhoWeAreController@show');

    Route::get('the-society/news', 'NewsController@index');
    Route::get('the-society/news/contact', function(){ return view('society.contact');});
    Route::get('the-society/news/respiratory-world-wide', 'NewsController@indexRespiratoryWorldWide');
    Route::get('the-society/news/respiratory-matters', 'NewsController@indexRespiratoryMatters');
    Route::get('the-society/news/respiratory-world-wide/{slug}', 'NewsController@show');    
    Route::get('the-society/news/respiratory-matters/{slug}', 'NewsController@show');    
    Route::get('the-society/news/{slug}', 'NewsController@show');

//Few redirects to avoid user missbehaviours
    Route::get('community', 'GeneralController@community');
    Route::get('scientific-and-educational-events', 'GeneralController@sciAndEduEvents');
    Route::get('publications', 'GeneralController@publications');
    Route::get('publications/{slug}', 'GeneralController@show');

    Route::get('the-society/membership', function(){
        return view('society.membership');
    });

    Route::get('the-society/assemblies', function(){
        return view('society.assemblies');
    });

    Route::get('congress-and-events/ers-research-seminars', 'ResearchController@researchSeminarsRedirect');
    Route::get('congress-and-events/ers-presidential-summits', 'ResearchController@summits');
    Route::get('congress-and-events/ers-presidential-summits/{slug}', 'ResearchController@showRS');
    Route::get('congress-and-events/the-lung-science-conference', 'LscController@index');
    Route::get('congress-and-events/the-lung-science-conference/{slug}', 'LscController@show');
    Route::get('congress-and-events/events-calendar', 'CalendarController@index');
    Route::get('congress-and-events/{slug}', 'GeneralController@show');

    Route::get('professional-development/courses', 'CourseController@index');
    Route::get('professional-development/courses/{slug}', 'CourseController@show');
    Route::get('professional-development/fellowships/short-term', 'FellowshipController@indexShortTerm');
    Route::get('professional-development/fellowships/short-term/{slug?}', 'FellowshipController@indexShortTerm');
    Route::get('professional-development/fellowships/long-term', 'FellowshipController@indexLongTerm');
    Route::get('professional-development/fellowships/long-term/{slug?}', 'FellowshipController@indexLongTerm');
    Route::get('professional-development/fellowships', 'FellowshipController@index'); 
    Route::get('professional-development/fellowships/{slug}', 'FellowshipController@show');
    Route::get('professional-development/grants-and-sponsorships', 'GeneralController@grantsAndSponsorships');
    Route::get('professional-development/educational-activities', 'CourseController@educationalActivities');
    Route::get('professional-development/{slug}', 'GeneralController@show'); //acreditation uses this route   
    Route::get('professional-development', 'CourseController@professionalDevelopment');

    Route::get('research', 'ResearchController@index'); 
    Route::get('research/research-seminars', 'ResearchController@researchSeminars'); 
    Route::get('research/research-seminars/{slug}', 'ResearchController@showRS'); 
    Route::get('research/{slug}', 'ResearchController@show');   
    
    Route::get('advocacy', 'GeneralController@advocacy');
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

    Route::get('search/{query}', 'CloudCms@search');
    Route::get('full-search', 'CloudCms@fullSearch');

});
