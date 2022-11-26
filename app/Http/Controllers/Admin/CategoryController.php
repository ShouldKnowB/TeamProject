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

/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 6: Add Category in ecommerce with creating migration, model, controller>
*   Author: <Funda of Web IT>
*   Date: <28 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=D9QcZIhLSlA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=10>
***************************************************************************************/

/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 7: Category View, edit update, confirm delete using Livewire in Laravel>
*   Author: <Funda of Web IT>
*   Date: <29 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=G6iJjxYWczA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=11>
***************************************************************************************/

