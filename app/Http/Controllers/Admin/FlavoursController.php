<?php

namespace App\Http\Controllers\Admin;

use App\Models\Flavours;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FlavoursFormRequest;

class FlavoursController extends Controller
{
    public function index()
    {
        $flavours = Flavours::all();
        return view('admin.flavours.index', compact('flavours'));
    }

    public function create()
    {
        return view('admin.flavours.create');

    }

    public function store(FlavoursFormRequest $request){

        $validatedData = $request->validated();
        $validatedData['status'] = $request->status == true ? '1':'0';
        Flavours::create($validatedData);

        return redirect('admin/flavours')->with('message','Flavour Added Successfully');
    }
    
    public function edit(Flavours $flavours){
    
        return view('admin.flavours.edit', compact('flavours'));

 }

 public function update(FlavoursFormRequest $request, $flavours_id){
   
     $validatedData = $request->validated();
     $validatedData['status'] = $request->status == true ? '1':'0';
    Flavours::find($flavours_id)->update($validatedData);

        return redirect('admin/flavours')->with('message','Flavour Updated Successfully' );

 }
 public function destroy($flavours_id){
    
    $flavours = Flavours::findOrFail($flavours_id);
    $flavours->delete();

    return redirect('admin/flavours')->with('message','Flavour Deleted Successfully' );
 }

    
}