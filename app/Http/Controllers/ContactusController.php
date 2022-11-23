<?php

namespace App\Http\Controllers;

use App\Http\Requests\QueriesFormRequest;
use App\Models\CustomerQueries;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function index()
    {
        return view('contact_us');
    }
    public function store(QueriesFormRequest $request)
        {
           $validatedData = $request->validated();
           $queries = new CustomerQueries;
           $queries->name = $validatedData['name'];
           $queries->email = $validatedData['email'];
           $queries->queries = $validatedData['queries'];

           $queries->save();

           return redirect('contact_us')->with('message','Query Submitted');

        }
}
