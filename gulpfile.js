var gulp = require('gulp');
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

mix.task('generate-service-worker');

 
});

gulp.task('generate-service-worker', function(callback) {
  var path = require('path');
  var swPrecache = require('sw-precache');
  var rootDir = 'public';

  swPrecache.write(path.join(rootDir, 'service-worker.js'), {
    staticFileGlobs: [
    	rootDir + '/**/*.{js,html,css,png,jpg,gif,svg,eot,ttf,woff}'
    ],
    runtimeCaching: [
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/js\/jquery\.min\.js/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/js\/all\.js/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/js\/fullpage\.js/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/js\/app-home\.js/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/DINpro\/DINWebPro\.woff/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/icomoon\/fonts\/icomoon\.woff/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/icomoon\/fonts\/icomoon\.ttf/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/stroke-7\/fonts\/Stroke-7\.ttf/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/stroke-7\/fonts\/Stroke-7\.woff/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/fonts\.googleapis\.com\/css\?family=Amiri:400,400italic,700,700italic/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/css\/all\.css/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/images\/logo-full-retina\.png/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'european-respiratory-assets'
			    }
			  }
		}
	],
    stripPrefix: rootDir
  }, callback);
});
