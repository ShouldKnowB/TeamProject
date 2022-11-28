<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Order;


class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();

        $totalAllUsers = User::count();
        $totalUser = User::where('role_as','0')->count();
        $totalAdmin = User::where('role_as','1')->count();


       $totalOrder = Order::count();

    return view('admin.dashboard', compact('totalProducts','totalCategories','totalAllUsers','totalUser', 'totalAdmin','totalOrder'));
    }
}

// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce - Part 3: How to setup Admin Panel for ecommerce in laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <24 May 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=uG6QlZ938Ow&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=7>
// *
// ***************************************************************************************/ -->
