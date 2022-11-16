<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacypolicyController extends Controller
{
    public function index()
    {
        return view('privacy_policy');
    }
}
