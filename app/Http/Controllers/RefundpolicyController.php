<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefundpolicyController extends Controller
{
    public function index()
    {
        return view('refund_policy');
    }
}
