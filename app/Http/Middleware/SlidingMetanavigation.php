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

                $menu->add('MyERS', 'https://my.ersnet.org')->prepend('<i class="icon-my-ers icon"></i><span>')->append('</span>')->link->attr(array('class' => 'ga-metanav')); 
                $menu->add('Membership', 'https://www.ersnet.org/the-society/membership')
                        ->prepend('<i class="icon-business-card icon"></i><span>')->append('</span>')
                        ->link->attr(array('class' => 'ga-metanav'));
                $menu->add('Publications', url("#publications"))
                        ->prepend('<i class="icon-publications icon"></i><span>')
                        ->append('</span>')
                        ->link->attr(array('class' => 'ga-metanav')); 
                $menu->add('e-learning', 'http://www.ers-education.org/home.aspx')
                        ->prepend('<i class="icon-e-learn icon"></i><span>')->append('</span>')
                        ->link->attr(array('target' => '_blank'));
                $menu->add('ERS Vision', 'http://www.ersvision.org/')
                        ->prepend('<i class="icon-vision icon"></i><span>')->append('</span>')
                        ->link->attr(array('target' => '_blank', 'class' => 'ga-metanav'));
                $menu->add('Healthy Lungs For Life', 'http://www.europeanlung.org/en/projects-and-research/projects/healthy-lungs-for-life/home/')
                        ->prepend('<i class="icon-hlfl icon" style="font-size:39px; margin-bottom:10px"></i><span>')->append('</span>')
                        ->link->attr(array('target' => '_blank', 'class' => 'ga-metanav'));
                $menu->add('European Lung Foundation', 'http://www.europeanlung.org/en/')
                        ->prepend('<i class="icon-elf icon" style="font-size:40px"></i><span>')->append('</span>')
                        ->link->attr(array('target' => '_blank', 'class' => 'ga-metanav'));
                $menu->add('FIRS', 'https://www.firsnet.org/')
                        ->prepend('<div class="firs_nav clearfix" style="margin-top:10px;"></div><span>')->append('<div style="font-size:12px"><i>United for Lung Health</i></div></span>')
                        ->link->attr(array('target' => '_blank', 'class' => 'ga-metanav'));
                $menu->add('Contact ERS', 'https://www.ersnet.org/the-society/who-we-are/contact')
                        ->prepend('<i class="s7-mail icon"></i><span>')->append('</span>')
                        ->link->attr(array('class' => 'ga-metanav'));
                $menu->add('Privacy Policy', 'https://www.ersnet.org/privacy')
                        ->link->attr(array('class' => 'ga-metanav'));



        });
      
        return $next($request);
    }
}
