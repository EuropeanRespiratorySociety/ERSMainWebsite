<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class SlidingMetanavigation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        \Menu::make('SlidingMetanav', function($menu){

            //the maximum depth is 4

            $menu->add('Home')->prepend('<i class="s7-culture icon"></i><span>')->append('</span>');
              

        });
      
        return $next($request);
    }
}
