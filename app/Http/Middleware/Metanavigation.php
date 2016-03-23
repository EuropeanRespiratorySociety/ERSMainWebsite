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

            $menu->add('The Society', 'the-society')->prepend('<i class="s7-culture icon"></i><span>')->append('</span>');
                $menu->theSociety->add('Who we are', 'who-we-are');

                $menu->theSociety->add('Assemblies', 'assemblies')->prepend('<span>')->append('</span>');
                    $menu->assemblies->add('Assembly 1', 'assemblies/assembly-1');
                        $menu->assembly1->add('Group 1.1', 'assemblies/group-1-1');
                    $menu->assemblies->add('Assembly 2', 'assembliesassembly-2');
                    $menu->assemblies->add('Assembly 3', 'assembliesassembly-3');
                    $menu->assemblies->add('Assembly 4', 'assembliesassembly-4');

                $menu->theSociety->add('Something Else', 'something-else')->prepend('<span>')->append('</span>');
                    $menu->somethingElse->add('Something 1', 'something-else/assembly-1');
                        $menu->something1->add('Group 1.1', 'something-else/group-1-1');
                    $menu->somethingElse->add('Something  2', 'something-else/assembly-2');
                    $menu->somethingElse->add('Something  3', 'something-else/assembly-3');
                    $menu->somethingElse->add('Something 4', 'something-else/assembly-4');

            $menu->add('The Club', 'the-club')->prepend('<i class="s7-culture icon"></i><span>')->append('</span>');
                $menu->theClub->add('Who we are', 'who-we-are');       

                         

        });
        return $next($request);
    }
}
