<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\ProductFormRequest;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;



class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
    return view('admin.products.create', compact('categories'));

    }

    public function store(ProductFormRequest $request){

        $validatedData = $request->validated();
        $category = Category::findOrFail($validatedData['category_id']);

        $product = $category->products()->create([
            'category_id' => $validatedData['category_id'],
            'name' => $validatedData['name'],
            'slug' =>  Str::slug($validatedData['slug']),
            'small_description' => $validatedData['small_description'],
            'price' => $validatedData['price'],
            'quantity' => $validatedData['quantity'],
            'ingredients' => $validatedData['ingredients'],
            'status' => $request->status == true ? '1' : '0',
            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],
        ]);

        //return $product->id;

        if($request->hasFile('image')){
            $uploadPath = 'uploads/products/';

            $i=1;
            foreach($request->file('image') as $imageFile){
                $extention = $imageFile->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extention;
                $imageFile->move($uploadPath,$filename);
                $finalImagePathName = $uploadPath.$filename;

                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $finalImagePathName,
                ]);
            }
        }

        return redirect('/admin/products')->with('message','Product Added Sucessfully');

  }

  public function edit(int $product_id)
    {
      $categories = Category::all();
      $product = Product::findOrFail($product_id);
      return view('admin.products.edit', compact('categories','product'));

    }

    public function update(ProductFormRequest $request, int $product_id )
    {
        $validatedData = $request->validated();
        $product = Category::findOrFail($validatedData['category_id'])
              ->products()->where('id',$product_id)->first();
        if($product)
        {
            $product->update([
                'category_id' => $validatedData['category_id'],
                'name' => $validatedData['name'],
                'slug' =>  Str::slug($validatedData['slug']),
                'small_description' => $validatedData['small_description'],
                'price' => $validatedData['price'],
                'quantity' => $validatedData['quantity'],
                'ingredients' => $validatedData['ingredients'],
                'status' => $request->status == true ? '1' : '0',
                'meta_title' => $validatedData['meta_title'],
                'meta_keyword' => $validatedData['meta_keyword'],
                'meta_description' => $validatedData['meta_description'],

            ]);

            if($request->hasFile('image')){
                $uploadPath = 'uploads/products/';

                $i=1;
                foreach($request->file('image') as $imageFile){
                    $extention = $imageFile->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extention;
                    $imageFile->move($uploadPath,$filename);
                    $finalImagePathName = $uploadPath.$filename;

                    $product->productImages()->create([
                        'product_id' => $product->id,
                        'image' => $finalImagePathName,
                    ]);
                }
            }

             return redirect('admin/products')->with('message','Product Updated Sucessfully');

        }
        else
        {
            return redirect('admin/products')->with('message','No Such Product ID Found');
        }
    }

    public function destroyImage(int $product_image_id)
    {
        $productImage = ProductImage::findOrFail($product_image_id);
        if(File::exists($productImage->image)){
             File::delete($productImage->image);
        }
        $productImage->delete();
        return redirect()->back()->with('message','Product Image Deleted');

    }

    public function destroy(int $product_id)
    {
        $product = Product::findOrFail($product_id);
         if($product->productImages){
            foreach($product->productImages as $image){
                if(File::exists($image->image)){
                    File::delete($image->image);
                }
            }
         }
           $product->delete();
           return redirect()->back()->with('message','Product Deleted with all its image');

    }


}


// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce - Part 11: Product read, edit update and delete with images in laravel>
// *   Author: <Funda of Web IT>
// *   Date: <16 June 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=PhDkujgfa4Y&list=PLRheCL1cXHruG6bV4tAIF4AhkUMaABf3F&index=12>
// *
// ***************************************************************************************/ -->