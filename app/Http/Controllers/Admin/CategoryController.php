<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryFormRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
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
       $validatedData = $request->validated();
       $category = new Category;
       $category->name = $validatedData['name'];
       $category->slug = Str::slug($validatedData['slug']);
       $category->description = $validatedData['description'];


       $category->meta_title = $validatedData['meta_title'];
       $category->meta_keyword = $validatedData['meta_keyword'];
       $category->meta_description = $validatedData['meta_description'];

       $category->status = $request->status == true ? '1' : '0';
       $category->save();

       return redirect('admin/category')->with('message','Category Added Sucessfully');





    }

    public function edit(Category $category){
        return view('admin.category.edit',compact('category'));
    }

    public function update(CategoryFormRequest $request, $category)
    {
        $validatedData = $request->validated();
        $category = Category::findOrFail($category);

        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];


        $category->meta_title = $validatedData['meta_title'];
        $category->meta_keyword = $validatedData['meta_keyword'];
        $category->meta_description = $validatedData['meta_description'];

        $category->status = $request->status == true ? '1' : '0';
        $category->update();
        return redirect('admin/category')->with('message','Category Updated Sucessfully');
    }

}
