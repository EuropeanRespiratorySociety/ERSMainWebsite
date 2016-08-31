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
    	//rootDir + '*.{js,html,css,png,jpg,gif,svg,eot,ttf,woff}',
    	rootDir + '/{home,navigation,news,people,publications,research,}/*.{js,html,css,png,jpg,gif,svg,eot,ttf,woff}'
   	],
    runtimeCaching: [
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/who-we-are/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-who-we-are'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/who-we-are\/leadership/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-leadership'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/who-we-are\/executive-office/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-executive-office'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/who-we-are\/statutes-policies-and-annual-report/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-satutes-policies'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/who-we-are\/awards/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-awards'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/who-we-are\/fellow-of-ers/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-fellows'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/membership/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-membersip'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/assemblies/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-assemblies'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/news\/respiratory-world-wide/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-rww'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/news\/respiratory-matters/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-rm'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/news\/press-office/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-press'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/news\/contact/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      name: 'ers-offline-pages-contact'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/new\.ersnet\.org\/the-society\/news/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-offline-pages-news'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/js\/all\.js/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/js\/jquery\.min\.js/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/js\/fullpage\.js/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/js\/app-home\.js/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/DINpro\/DINWebPro\.woff/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/icomoon\/fonts\/icomoon\.woff/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/icomoon\/fonts\/icomoon\.ttf/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/stroke-7\/fonts\/Stroke-7\.ttf/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/fonts\/stroke-7\/fonts\/Stroke-7\.woff/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/fonts\.googleapis\.com\/css\?family=Amiri:400,400italic,700,700italic/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/css\/all\.css/,
	  		handler: 'networkFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		},
	    {
	  		urlPattern: /^https:\/\/bootstrap\.ersnet\.org\/images\/logo-full-retina\.png/,
	  		handler: 'cacheFirst',
	  		options: {
			    cache: {
			      maxEntries: 10,
			      name: 'ers-assets'
			    }
			  }
		}
	],
    stripPrefix: rootDir
  }, callback);
});
