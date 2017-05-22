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

            $menu->add('MyERS', 'https://my.ersnet.org')->prepend('<i class="icon-my-ers icon"></i><span>')->append('</span>'); 
            $menu->add('Publications', url("#publications"))->prepend('<i class="icon-publications icon"></i><span>')->append('</span>'); 
            $menu->add('e-learning', 'http://www.ers-education.org/home.aspx')
                    ->prepend('<i class="icon-e-learn icon"></i><span>')->append('</span>')
                    ->link->attr(array('target' => '_blank'));
                    
            $menu->add('ERS Vision', 'http://www.ersvision.org/')
                    ->prepend('<i class="icon-vision icon"></i><span>')->append('</span>')
                    ->link->attr(array('target' => '_blank')); 
            $menu->add('Healthy Lungs For Life', 'http://www.europeanlung.org/en/projects-and-research/projects/healthy-lungs-for-life/home/')
                    ->prepend('<i class="icon-hlfl icon" style="font-size:39px; margin-bottom:10px"></i><span>')->append('</span>')
                    ->link->attr(array('target' => '_blank')); 
            $menu->add('European Lung Foundation', 'http://www.europeanlung.org/en/')
                    ->prepend('<i class="icon-elf icon" style="font-size:40px"></i><span>')->append('</span>')
                    ->link->attr(array('target' => '_blank')); 
            $menu->add('TB Consilium', 'https://www.tbconsilium.org/')
                    ->prepend('<div class="tb_consilium_nav clearfix" style="margin-top:10px;"><i class="icon-ers icon pull-left"></i><i class="icon-who icon pull-right who-icon"></i></div><span>')->append('</span>')
                    ->link->attr(array('target' => '_blank')); 
            $menu->add('FIRS', 'https://www.firsnet.org/')
                    ->prepend('<div class="firs_nav clearfix" style="margin-top:10px;"></div><span>')->append('<div style="font-size:12px"><i>United for Lung Health</i></div></span>')
                    ->link->attr(array('target' => '_blank')); 
              

        });
      
        return $next($request);
    }
}
