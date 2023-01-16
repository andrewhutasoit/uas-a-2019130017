<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Order;
use App\Models\Order_menu;

class OrderController extends Controller
{
    public function order(Request $request) {
        $menu = Menu::all();
    }
}
