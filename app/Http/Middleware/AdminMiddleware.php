<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::user()->role_as =='1'){
            return redirect('/home')->with('status','Access Denied. As you are not an Admin');

        }
        return $next($request);
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

/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 4: How to make Admin Middleware in laravel | redirect admin login to dashboard>
*   Author: <Funda of Web IT>
*   Date: <25 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=2Y5IJYZbaa8&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=8>
***************************************************************************************/