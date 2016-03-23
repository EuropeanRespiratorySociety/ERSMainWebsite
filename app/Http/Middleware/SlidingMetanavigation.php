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

            $menu->add('The Society')->prepend('<i class="s7-culture icon"></i><span>')->append('</span>');
                $menu->theSociety->add('Who we are', 'forms/elements');

                $menu->theSociety->add('Assemblies', 'pages/blank')->prepend('<span>')->append('</span>');
                    $menu->assemblies->add('Assembly 1', 'ui/buttons');
                        $menu->assembly1->add('Group 1.1', 'ui/buttons');
                        $menu->assembly1->add('Group 1.2', 'ui/panels');
                    $menu->assemblies->add('Assembly 2', 'pages/blank-header');
                    $menu->assemblies->add('Assembly 3', 'pages/blank-aside');
                    $menu->assemblies->add('Assembly 4', 'pages/fullpage');

                $menu->theSociety->add('Something Else', 'profile/member')->prepend('<span>')->append('</span>');
                    $menu->somethingElse->add('Something 1', 'profile/member');
                        $menu->something1->add('Group 1.1', 'profile/non-member');
                    $menu->somethingElse->add('Something Nice', 'profile/non-member');
                    $menu->somethingElse->add('Something  Beautiful', 'profile/edit');
                    $menu->somethingElse->add('Something Wonderful', 'profile/variations');

            $menu->add('An other menu item', 'special')->prepend('<i class="s7-plane icon"></i><span>')->append('</span>');
                $menu->anOtherMenuItem->add('Who we are', 'login'); 
                
            $menu->add('Yet an other one', 'ui/grid')->prepend('<i class="s7-joy icon"></i><span>')->append('</span>');
                $menu->yetAnOtherOne->add('A game', 'ui/grid');     

            $menu->add('Why not an other', 'dashboard/member')->prepend('<i class="s7-cart icon"></i><span>')->append('</span>');
                $menu->whyNotAnOther->add('Carrots', 'dashboard/non-member'); 
              

        });
      
        return $next($request);
    }
}
