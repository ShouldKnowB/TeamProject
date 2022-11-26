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
