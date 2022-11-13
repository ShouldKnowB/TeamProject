<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {
        return view('admin.products.create');

    }

    public function store(ProductFormRequest $request){

        $validatedData = $request->validated();

        $product = new Product;
        $product->name = $validatedData['name'];
        $product->slug = Str::slug($validatedData['slug']);
        $product->small_description = $validatedData['small_description'];
        $product->ingredients = $validatedData['ingredients'];
        $product->price = $validatedData['price'];
        $product->quantity = $validatedData['quantity'];
        $product->status =  $request->status == true ? '1' : '0';
        $product->meta_title = $validatedData['meta_title'];
        $product->meta_keyword = $validatedData['meta_keyword'];
        $product->meta_description = $validatedData['meta_description'];



    if($request->hasFile('image')){
        $uploadPath = 'uploads/products/';

        foreach($request->file('image') as $imageFile){
            $extention = $imageFile->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $imageFile->move($uploadPath,$filename);
            $finalImagePathName = $uploadPath.'-'.$filename;

            $product->productImages()->create([
                'product_id' => $product->id,
                'image' => $finalImagePathName,
            ]);


        }
    }
       return redirect('/admin/products')->with('message','Product Added Sucessfully');



    }
}
