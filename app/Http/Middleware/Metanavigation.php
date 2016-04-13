<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class Metanavigation
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

        \Menu::make('Metanav', function($menu){

            $menu->add('Home', 'home')->prepend('<i class="s7-culture icon"></i><span>')->append('</span>');                         

        });
        return $next($request);
    }
}
