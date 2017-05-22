<?php

namespace App\Providers;

use Auth;
use App\Extensions\ErsUserProvider;
use Illuminate\Support\ServiceProvider;


class ErsAuthServiceProvider extends ServiceProvider

{
 /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        Auth::provider('ers',function($app)
        {
            $model = $app['config']['auth.model'];
            return new ErsUserProvider($app['hash'], $model);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
