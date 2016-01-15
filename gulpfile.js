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

    /*
    |--------------------------------------------------------------------------
    | Development Tip
    |--------------------------------------------------------------------------    
    | 
    | To compile faster, we do not need to compile/move all files each time,
    | thust we can comment all lines that are not necessary.
    |
    */

	//mix.copy('resources/assets/fonts', 'public/fonts');
    mix.copy('resources/html/pages', 'public/pages');
    //mix.copy('resources/html/images', 'public/images');

    /* 
    mix.copy('resources/assets/js/main.js', 'public/js-source/main.js');
    mix.copy('resources/assets/js/init.js', 'public/js-source/init.js');
    mix.copy('resources/assets/js/app-ui-notifications.js', 'public/js-source/app-ui-notifications.js');
    mix.copy('resources/assets/js/app-ui-nestable-lists.js', 'public/js-source/app-ui-nestable-lists.js');
    mix.copy('resources/assets/js/app-tables-datatables.js', 'public/js-source/app-tables-datatables.js');
    mix.copy('resources/assets/js/app-form-elements.js', 'public/js-source/app-form-elements.js');
	mix.copy('resources/html/index.html', 'public/index.html');
    */
    /*     */
    mix.less('style.less');
    mix.styles([
    	'../../../public/css/style.css',
        '../vendor/jquery.gritter/css/jquery.gritter.css',
        '../vendor/datetimepicker/css/bootstrap-datetimepicker.min.css',
        '../vendor/select2/css/select2.min.css',
        '../vendor/bootstrap-slider/css/bootstrap-slider.css',
        '../vendor/dropzone/dist/dropzone.css',
        '../vendor/jquery.niftymodals/css/component.css',
        '../vendor/jquery.vectormap/jquery-jvectormap-1.2.2.css',
        '../vendor/datatables/css/dataTables.bootstrap.min.css',
        '../../../public/css/style.css'
    	]);

    /**/ 
    mix.scripts([
    	'../vendor/jquery/jquery.min.js',
        '../vendor/bootstrap/dist/js/bootstrap.min.js',

        'main.js',

        '../vendor/jquery.nanoscroller/javascripts/jquery.nanoscroller.js',
        '../vendor/jquery.gritter/js/jquery.gritter.js',
        '../vendor/jquery.nestable/jquery.nestable.js',
        '../vendor/jquery.niftymodals/js/jquery.modalEffects.js',
        '../vendor/jquery-ui/jquery-ui.min.js',

        '../vendor/datatables/js/jquery.dataTables.min.js',
        '../vendor/datatables/js/dataTables.bootstrap.min.js',
        '../vendor/datatables/plugins/buttons/js/dataTables.buttons.js',
        '../vendor/datatables/plugins/buttons/js/buttons.html5.js',
        '../vendor/datatables/plugins/buttons/js/buttons.flash.js',
        '../vendor/datatables/plugins/buttons/js/buttons.print.js',
        '../vendor/datatables/plugins/buttons/js/buttons.colVis.js',
        '../vendor/datatables/plugins/buttons/js/buttons.bootstrap.js',

        '../vendor/prettify/prettify.js',
        '../vendor/datetimepicker/js/bootstrap-datetimepicker.min.js',        
        //'../vendor/fuelux/js/wizard.js',
        '../vendor/select2/js/select2.min.js',
        //'../vendor/bootstrap-slider/js/bootstrap-slider.js',
        '../vendor/parsley/parsley.min.js',
        '../vendor/dropzone/dist/dropzone.js',
        //'../vendor/jquery.maskedinput/jquery.maskedinput.min.js',
        '../vendor/moment.js/min/moment.min.js',

        'app-tables-datatables.js',
        //'app-ui-notifications.js',
        'app-ui-nestable-lists.js',
        //'app-form-wizard.js',
        //'app-form-masks.js',
        'app-form-elements.js',
        'app-page-profile.js',

    	'init.js'
    	]);
        
        //Specific copies of files
        //mix.copy('resources/assets/js/app-ui-notifications.js', 'public/js/app-ui-notifications.js');
        mix.copy('resources/assets/vendor/dropzone/upload.php', 'public/pages/upload.php');

       

});
