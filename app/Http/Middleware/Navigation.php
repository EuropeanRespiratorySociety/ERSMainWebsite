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

              $menu->add('Pages', 'pages');
                  $menu->pages->add('Blank','pages/blank');
                  $menu->pages->add('Blank With Header','pages/blank-header');
                  $menu->pages->add('Blank With Aside','pages/blank-aside');
                  $menu->pages->add('Calendar','pages/calendar');
                  $menu->pages->add('Stats','pages/stats');
                  $menu->pages->add('Fullpage','pages/fullpage');

              $menu->add('Forms',  'forms');
                $menu->forms->add('Elements',  'forms/elements');
                $menu->forms->add('Upload',  'forms/upload');
                $menu->forms->add('Validations',  'forms/validation');

              $menu->add('UI', 'ui');
                $menu->uI->add('General', 'ui/general');
                $menu->uI->add('Buttons', 'ui/buttons');
                $menu->uI->add('Alerts', 'ui/alerts');
                $menu->uI->add('Notifications', 'ui/notifications');
                $menu->uI->add('Grid', 'ui/grid');
                $menu->uI->add('Icons', 'ui/icons');
                $menu->uI->add('Modals', 'ui/modals');
                $menu->uI->add('Nestable-lists', 'ui/nestable-lists');
                $menu->uI->add('Panels', 'ui/panels');
                $menu->uI->add('Tabs & Accordions', 'ui/tabs-accordions');    
              
              $menu->add('Profile', 'profile');
                $menu->profile->add('Member', 'profile/member');
                $menu->profile->add('Edit', 'profile/edit');
                $menu->profile->add('Non-member', 'profile/non-member');
                $menu->profile->add('Variations', 'profile/variations');
              
              $menu->add('Tables', 'tables');
                $menu->tables->add('General', 'tables/general');
                $menu->tables->add('Datatables', 'tables/datatables');
            
              $menu->add('Special',  'special');
                $menu->special->add('Login', 'special/login');
                $menu->special->add('Signup', 'special/sign-up');
                $menu->special->add('Signup Errors', 'special/sign-up-errors');
                $menu->special->add('Forgot Password', 'special/forgot');

              $menu->add('Errors', 'errors');
                $menu->errors->add('404', 'errors/404');
                $menu->errors->add('503', 'errors/503');  

        });

        return $next($request);
    }
}
