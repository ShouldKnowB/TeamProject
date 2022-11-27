<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerQueries;
use Illuminate\Http\Request;

class QueriesController extends Controller
{
    public function index(){
        $queries = CustomerQueries::all();
        return view('admin.queries.index', compact('queries'));
    }
}
