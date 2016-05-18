<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class Navigation
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
        \Menu::make('MainNav', function($menu){

            $menu->add('Home'); 
            $menu->add('The Society','the-society');
                $menu->theSociety->add('Who we are', 'the-society/who-we-are' );
                $menu->theSociety->add('Executive office', 'the-society/executive-office' );
                    #$menu->theSociety->whoWeAre->add('Executive office', 'the-society/who-we-are/executive-office' );
                $menu->theSociety->add('Assemblies', 'the-society/assemblies' );
            $menu->add('Congress and events','congress-and-events');
                $menu->congressAndEvents->add('Events calendar','congress-and-events/events-calendar');
                $menu->congressAndEvents->add('ERS International Congress','http://erscongress.org');
                $menu->congressAndEvents->add('The Lung Science Conference','congress-and-events/the-lung-science-conference');
                $menu->congressAndEvents->add('Sleep and Breathing Conference','http://www.sleepandbreathing.org');
                $menu->congressAndEvents->add('ERS Presidential Summit','congress-and-events/ers-presidential-summit');
                $menu->congressAndEvents->add('ERS Research Seminars','congress-and-events/ers-research-seminars');
                $menu->congressAndEvents->add('Past International Congresses','congress-and-events/past-international-congresses');
                $menu->congressAndEvents->add('Event endorsement','congress-and-events/event-endorsement');

            $menu->add('Publications','publications');
            $menu->add('Professional development','professional-development');
                $menu->professionalDevelopment->add('ERS Courses','professional-development/ers-courses');

            $menu->add('Research','research');
            $menu->add('Advocacy','advocacy');




        });

        return $next($request);
    }
}
