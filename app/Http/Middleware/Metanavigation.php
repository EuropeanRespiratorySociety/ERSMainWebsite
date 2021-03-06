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

            $menu->add('MyERS', 'https://my.ersnet.org')->link->attr(array('class' => 'ga-metanav'))/*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('Membership', 'https://www.ersnet.org/the-society/membership')
            ->link->attr(array('class' => 'ga-metanav'))
            /*->prepend('<i class="icon-business-card icon"></i><span>')->append('</span>')*/;
            $menu->add('Publications', url("#publications"))->link->attr(array('class' => 'ga-metanav'))/*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('e-learning', 'http://www.ers-education.org/home.aspx')
                    ->link->attr(array('target' => '_blank'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('Vision', 'http://www.ersvision.org/')
                    ->link->attr(array('target' => '_blank', 'class' => 'ga-metanav'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('Healthy Lungs For Life', 'http://www.europeanlung.org/en/projects-and-research/projects/healthy-lungs-for-life/home/')
                    ->link->attr(array('target' => '_blank', 'class' => 'ga-metanav'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('European Lung Foundation', 'http://www.europeanlung.org/en/')
                    ->link->attr(array('target' => '_blank', 'class' => 'ga-metanav'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/;       
            $menu->add('FIRS', 'https://www.firsnet.org/')
                    ->link->attr(array('target' => '_blank', 'class' => 'ga-metanav'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/;                         

        });
        return $next($request);
    }
}
