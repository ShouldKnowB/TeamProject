<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermsofuseController extends Controller
{
    public function index()
    {
        return view('terms_of_use');
    }

}
