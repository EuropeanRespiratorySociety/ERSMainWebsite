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

            $menu->add('MyERS', 'https://my.ersnet.org')/*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('Publications', url("#publications"))/*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('e-learning', 'http://www.ers-education.org/home.aspx')
                    ->link->attr(array('target' => '_blank'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('Vision', 'http://www.ersvision.org/')
                    ->link->attr(array('target' => '_blank'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('Healthy Lung For Life', 'http://www.europeanlung.org/en/projects-and-research/projects/healthy-lungs-for-life/home/')
                    ->link->attr(array('target' => '_blank'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('European Lung Foundation', 'http://www.europeanlung.org/en/')
                    ->link->attr(array('target' => '_blank'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
            $menu->add('TB Consilium', 'https://www.tbconsilium.org/')
                    ->link->attr(array('target' => '_blank'))
                    /*->prepend('<i class="s7-culture icon"></i><span>')->append('</span>')*/; 
              

        });
      
        return $next($request);
    }
}
