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

Route::get('/', function () {
    return view('pages.blank');
});

Route::group(['prefix' => 'pages'], function () {
	Route::get('blank', function () {
	    return view('pages.blank');
	});

	Route::get('blank-header', function () {
	    return view('pages.blank-header');
	});

	Route::get('blank-aside', function () {
	    return view('pages.blank-aside');
	});

	Route::get('calendar', function () {
	    return view('pages.calendar');
	});

	Route::get('stats', function () {
	    return view('pages.stats');
	});
});

Route::group(['prefix' => 'errors'], function () {
	Route::get('{errorCode}', function ($errorCode) {
	    return view('errors.error',['error' => $errorCode]);
	});
});


Route::group(['prefix' => 'forms'], function () {
	Route::get('elements', function () {
	    return view('forms.elements');
	});

	Route::get('masks', function () {
	    return view('forms.masks');
	});

	Route::get('upload', function () {
	    return view('forms.upload');
	});

	Route::get('validation', function () {
	    return view('forms.validation');
	});

	Route::get('wizard', function () {
	    return view('forms.wizard');
	});
});

Route::group(['prefix' => 'profile'], function () {
	Route::get('edit', function () {
	    return view('profile.edit');
	});
	
	Route::get('member', function () {
	    return view('profile.member');
	});
	
	Route::get('non-member', function () {
	    return view('profile.non-member');
	});

	Route::get('variations', function () {
	    return view('profile.variations');
	});
});

Route::group(['prefix' => 'tables'], function () {
	Route::get('datatables', function () {
	    return view('tables.datatables');
	});
	
	Route::get('general', function () {
	    return view('tables.general');
	});
});

Route::group(['prefix' => 'ui'], function () {
	Route::get('alerts', function () {
	    return view('ui.alerts');
	});
	
	Route::get('buttons', function () {
	    return view('ui.buttons');
	});
	
	Route::get('general', function () {
	    return view('ui.general');
	});
	
	Route::get('grid', function () {
	    return view('ui.grid');
	});
	
	Route::get('icons', function () {
	    return view('ui.icons');
	});
	
	Route::get('modals', function () {
	    return view('ui.modals');
	});
	
	Route::get('nestable-lists', function () {
	    return view('ui.nestable-lists');
	});
	
	Route::get('notifications', function () {
	    return view('ui.notifications');
	});
	
	Route::get('panels', function () {
	    return view('ui.panels');
	});
	
	Route::get('tabs-accordions', function () {
	    return view('ui.tabs-accordions');
	});
});

Route::group(['prefix' => 'special'], function () {
	Route::get('login', function () {
	    return view('special.login');
	});

	Route::get('sign-up', function () {
	    return view('special.sign-up');
	});

	Route::get('forgot', function () {
	    return view('special.forgot');
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

/*Route::group(['middleware' => ['web']], function () {
    Route::resource('blog', 'Blog');
});*/

