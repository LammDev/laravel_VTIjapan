<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Area::find(1)->shops;
        $area = Shop::find(2)->area;
        //dd($shops);


        $routes = Shop::find(1)->routes()->get();
        dd($area, $shops, $routes);
    }   
}
