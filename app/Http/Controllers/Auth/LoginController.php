<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function authenticated()
    {
      if(Auth::user()->role_as == '1')  {
        return redirect('admin/dashboard')->with('status','Welcome to Dashboard');
      }
      else{
        return redirect('/home')->with('status','Logged in Sucessfully');
      }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 4: How to make Admin Middleware in laravel | redirect admin login to dashboard>
*   Author: <Funda of Web IT>
*   Date: <25 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=2Y5IJYZbaa8&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=8>
***************************************************************************************/
