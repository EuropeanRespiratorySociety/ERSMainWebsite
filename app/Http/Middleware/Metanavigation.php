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

            $menu->add('The Society')->prepend('<i class="s7-culture icon"></i><span>')->append('</span>');
                $menu->theSociety->add('Who we are', 'who-we-are');
                $menu->theSociety->add('Assemblies', 'assembles');
                    $menu->assemblies->add('Assembly 1', 'assembly-1');
                        $menu->assembly1->add('Group 1.1', 'group-1-1');
                    $menu->assemblies->add('Assembly 2', 'assembly-2');
                    $menu->assemblies->add('Assembly 3', 'assembly-3');
                    $menu->assemblies->add('Assembly 4', 'assembly-4');

        });
        return $next($request);
    }
}
