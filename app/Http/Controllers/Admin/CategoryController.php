<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryFormRequest $request)
    {
       $validateData = $request->validated();
       $category = new Category;
       $category->name = $validateData['name'];
       $category->slug = Str::slug($validateData['slug']);
       $category->description = $validateData['description '];
       if($request->hasFile('image')){
        $file = $request->file('image');

        $ext = $file->getClientOriginalExtension();
        $filename = time().'.'.$ext;
        $file->move('uploads/category/',$filename);
        $category->image = $filename;
       }

       $category->image = $validateData['image'];

       $category->meta_title = $validateData['meta_title'];
       $category->meta_keyword = $validateData['meta_keyword'];
       $category->meta_description = $validateData['meta_description'];

       $category->status = $request->status == true ? '1' : '0';
       $category->save();

       return redirect('admin/category')->with('message','Category Added Sucessfully');




    }
}
