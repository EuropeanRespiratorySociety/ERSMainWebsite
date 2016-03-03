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

  /*  mix.copy('resources/assets/fonts', 'public/fonts');
    mix.copy('resources/assets/vendor/bootstrap/dist/fonts', 'public/fonts/glyphicons');

    mix.copy('resources/html/images', 'public/images');
      
    //this was taken out from the main file for Kendo to work on myERS
    mix.copy('resources/assets/vendor/jquery/jquery.min.js', 'public/js/jquery.min.js');
 
/*  */
    mix.less('style.less');
    mix.styles([
        '../vendor/select2/css/select2.min.css',
    	'../../../public/css/style.css',
        '../vendor/jquery.gritter/css/jquery.gritter.css',
        '../vendor/jquery.niftymodals/css/component.css',
        '../vendor/jquery.vectormap/jquery-jvectormap-1.2.2.css',
        '../vendor/jquery.fullcalendar/fullcalendar.css',
        '../vendor/jquery.fullcalendar/fullcalendar.print.css',
        '../vendor/jquery.vectormap/jquery-jvectormap-1.2.2.css',
        '../vendor/datetimepicker/css/bootstrap-datetimepicker.min.css',
        '../vendor/bootstrap-slider/css/bootstrap-slider.css',
        '../vendor/dropzone/dist/dropzone.css',
        '../vendor/datatables/css/dataTables.bootstrap.min.css',
        '../vendor/fullpagejs/dist/jquery.fullpage.min.css',
        '../vendor/wow/wow.css',
        '../../../public/css/style.css'
    	]);
/**/
    mix.scripts([
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
        '../vendor/jquery.fullcalendar/fullcalendar.js',
        '../vendor/skycons/skycons.js',
        '../vendor/wow/wow.js',

        'app-tables-datatables.js',
        //'app-ui-notifications.js',
        'app-ui-nestable-lists.js',
        //'app-form-wizard.js',
        //'app-form-masks.js',
        'app-form-elements.js',
        'app-page-profile.js',

    	'init.js'
    	]);
        
   
        mix.scripts([  
        '../vendor/jquery-flot/jquery.flot.js', 
        '../vendor/jquery-flot/jquery.flot.pie.js', 
        '../vendor/jquery-flot/jquery.flot.resize.js', 
        '../vendor/jquery-flot/plugins/jquery.flot.orderBars.js', 
        '../vendor/jquery-flot/plugins/curvedLines.js', 
        
        '../vendor/jquery.sparkline/jquery.sparkline.min.js', 
       
        '../vendor/jquery.vectormap/jquery-jvectormap-1.2.2.min.js', 
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js',
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js', 
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js', 
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-fr-merc-en.js', 
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js',
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js', 
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js', 
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-map.js', 
        '../vendor/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js', 

        '../vendor/countup/countUp.min.js',
        '../vendor/chartjs/Chart.min.js'

        ], 'public/js/stats.js');

        mix.scripts([  
        '../vendor/fullpagejs/vendors/jquery.easings.min.js',
        '../vendor/fullpagejs/vendors/jquery.slimscroll.min.js',
        '../vendor/fullpagejs/dist/jquery.fullpage.min.js'
        ], 'public/js/fullpage.js');
      
        //Specific copies of files
        mix.copy('resources/assets/js/app-ui-notifications.js', 'public/js/app-ui-notifications.js');
        mix.copy('resources/assets/js/app-page-calendar.js', 'public/js/app-page-calendar.js');

        mix.copy('resources/assets/js/app-stats.js', 'public/js/app-stats.js');
        mix.copy('resources/assets/js/app-fullpage.js', 'public/js/app-fullpage.js');
        //mix.copy('resources/assets/js/app-wow.js', 'public/js/app-wow.js');
        
        mix.copy('resources/assets/vendor/dropzone/upload.php', 'public/pages/upload.php');
       

});
