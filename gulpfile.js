var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.copy('resources/assets/fonts', 'public/fonts');
    mix.copy('resources/html/pages', 'public/pages');
    mix.copy('resources/html/images', 'public/images');
	mix.copy('resources/html/index.html', 'public/index.html');
    mix.less('style.less');
    mix.styles([
    	'../../../public/css/style.css',
        '../vendor/jquery.gritter/css/jquery.gritter.css'
    	]);
    mix.scripts([
    	'../vendor/jquery/jquery.min.js',
    	'../vendor/jquery.nanoscroller/javascripts/jquery.nanoscroller.js',
    	'main.js',
        '../vendor/bootstrap/dist/js/bootstrap.min.js',
        '../vendor/jquery.gritter/js/jquery.gritter.js',
        '../vendor/jquery.nestable/jquery.nestable.js',
        '../vendor/jquery.niftymodals/js/jquery.modalEffects.js',
        '../vendor/prettify/prettify.js',
        'app-ui-notifications.js',
        'app-ui-nestable-lists.js',
    	'init.js'
    	]);
});
