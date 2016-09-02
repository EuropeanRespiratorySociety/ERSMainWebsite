<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class Breadcrumb
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
        \Menu::make('BreadCrumb', function($menu){
          $mainNav = \Menu::get('MainNav');
          foreach ($mainNav->items as $key => $item) {
              if($item->attr('class') == 'active'){
                $menu->add($item->title, $item->link->path['url'])->secure();
              }  
          }
  
        });

        return $next($request);
    }
}
