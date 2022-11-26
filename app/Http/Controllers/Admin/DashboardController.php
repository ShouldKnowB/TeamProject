<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
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
