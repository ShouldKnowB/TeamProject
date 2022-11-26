<?php

namespace App\Http\Livewire\Frontend\Store;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class View extends Component
{
public $category, $product, $quantityCount = 1;

    public function mount($category, $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function decrementQuantity()
    {
        if($this->quantityCount > 1){

            $this->quantityCount--;
        }
    }
    public function incrementQuantity()
    {
        if($this->quantityCount < 10){
       $this->quantityCount++;
        }

    }
    public function addToCart(int $productId)
    {
        if(Auth::check())
        {
            //dd($productId);
            if($this->product->where('id',$productId)->where('status','0')->exists())
            {
                if(Cart::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists())
                {
                    $this->dispatchBrowserEvent('message',[
                        'text' => 'PRODUCT ALREADY ADDED',
                        'type' => 'warning',
                        'status' => 404
                    ]);

                }
                else
                {


               // dd('am product');
               if($this->product->quantity > 0)
               {
                if($this->product->quantity > $this->quantityCount)
                {
                    //Insert Product to Cart
                Cart::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId,
                    'quantity' => $this->quantityCount
                ]);
                $this->dispatchBrowserEvent('message',[
                    'text' => 'Product Added to Cart',
                    'type' => 'success',
                    'status' => 200

                ]);

                }
                else
                {
                    $this->dispatchBrowserEvent('message',[
                        'text' => 'ONLY '.$this->product->quantity .'QUANTITY AVAILABLE',
                        'type' => 'warning',
                        'status' => 404
                    ]);

                }


               }
               else
               {
                $this->dispatchBrowserEvent('message',[
                    'text' => 'OUT OF STOCK',
                    'type' => 'warning',
                    'status' => 404
                ]);

              }
            }

            }
            else
            {
                $this->dispatchBrowserEvent('message',[
                    'text' => 'PRODUCT DOES NOT EXIST',
                    'type' => 'warning',
                    'status' => 404
                ]);

            }

        }
        else
        {
            $this->dispatchBrowserEvent('message',[
                'text' => 'PLEASE LOGIN TO ADD TO CART',
                'type' => 'info',
                'status' => 401
            ]);

        }

    }


    public function render()
    {
        return view('livewire.frontend.store.view', [
            'category' => $this->category,
            'product' => $this ->product
        ]);
    }
}

// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 33: Add to Cart - How to Add product to cart using Livewire in Laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <22 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: https://www.youtube.com/watch?v=Iy_KLHg4Yn0&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=3>
// ***************************************************************************************/ -->
// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 28: How to show success message in Livewire | Integrate Alertify JS in Laravel>
// *   Author: <Funda of Web IT>
// *   Date: <16 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=s-LW_HcpRg4&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=2>
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
