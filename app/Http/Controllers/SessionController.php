<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
        public function accessSessionData(Request $request) {
           if($request->session()->has('name'))
              echo $request->session()->get('name');
           else
              echo 'No data in the session';
        }
}
