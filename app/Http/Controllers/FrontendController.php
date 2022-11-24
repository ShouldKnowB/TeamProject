<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.welcome');
    }
    public function home()
    {
        return view('frontend.home');
    }
    public function aboutus()
    {
        return view('frontend.about_us');
    }

    public function contactus()
    {
        return view('frontend.contact_us');
    }
    public function faqs()
    {
        return view('frontend.faqs');
    }
    public function tandc()
    {
        return view('frontend.terms_and_conditions');
    }
    public function privacypolicy()
    {
        return view('frontend.privacy_policy');
    }
    public function refundpolicy()
    {
        return view('frontend.refund_policy');
    }
    public function tou()
    {
        return view('frontend.terms_of_use');
    }

    public function categories()
    {
        $categories = Category::where('status','0')->get();
        return view('frontend.store.drinks', compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug',$category_slug)->first();
        if($category){
            $products = $category->products()->get();
            return view('frontend.store.shop', compact('products','category'));
        }else{
            return redirect()->back();
        }
    }

    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug',$category_slug)->first();
        if($category){
            $product = $category->products()->where('slug',$product_slug)->where('status','0')->first();
            if($product)
            {
                return view('frontend.store.view', compact('product','category'));
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }

    }
}
