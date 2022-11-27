<?php

namespace App\Http\Controllers;

use App\Models\CustomerQueries;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\http\Requests\QueriesFormRequest;



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
    public function store(QueriesFormRequest $request){
       $validatedData = $request->validated();
       $queries = new CustomerQueries;
       $queries->name = $validatedData['name'];
       $queries->email = $validatedData['email'];
       $queries->queries = $validatedData['queries'];
       $queries->save();

       return redirect('/contact_us')->with('message','Query Submitted');
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
// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce - Part 32: How to make Quantity increment decrement using livewire in laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <20 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=-sfej8ejXKs&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=4>
// *
// ***************************************************************************************/ -->
 /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 34: Show Cart items count using livewire event listeners in laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <28 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=x-izhuL-uU0&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=1>
// ***************************************************************************************/
