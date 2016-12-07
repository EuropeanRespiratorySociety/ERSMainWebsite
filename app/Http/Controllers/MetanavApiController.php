<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MetanavApiController extends Controller
{
    public function index()
    {
        $menu = \Menu::get('SlidingMetanav');
        $params['items'] = $menu->items;

        return response()->json([
            'menu' => view('sidebar.left-variant-api')->with($params)->render()
    ]);

    }
}
