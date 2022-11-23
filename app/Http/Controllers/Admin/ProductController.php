<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Flavours;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;


class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {
        $categories = Category::all();
        $flavours = Flavours::where('status','0')->get();
        return view('admin.products.create', compact('categories','flavours'));

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
            'category_id' => $validatedData['category_id'],
            'status' => $request->status == true ? '1' : '0',
            'meta_title' => $validatedData['meta_title'],
            'meta_keyword' => $validatedData['meta_keyword'],
            'meta_description' => $validatedData['meta_description'],


        ]);

        if($request->hasFile('image')){
        $uploadPath = 'uploads/products/';



        foreach($request->file('image[]') as $imageFile){
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
    if($request->flavours){
        foreach($request->flavours as $key => $flavours){

            $product->productFlavours()->create([

            ]);
            
        }
    }
       return redirect('/admin/products')->with('message','Product Added Sucessfully');



    }
}
