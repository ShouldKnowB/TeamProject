<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use Livewire\Component;

class CartShow extends Component
{
    public $cart;
    public $totalPrice = 0;

    public function decreaseQuantity(int $cartId)
    {
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->productFlavour()->where('id', $cartData->product_flavour_id)->exists())
            {
                $productFlavour = $cartData->productFlavour()->where('id', $cartData->product_flavour_id)->first();
                if($productFlavour->quantity > $cartData->quantity)
                {
                    $cartData->decrement('quantity');
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Quantity Updated',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }else{
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Only' .$productFlavour->quantity. 'Available',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }

                }else{
                if($cartData->product->quantity > $cartData->quantity)
                {
                    $cartData->decrement('quantity');
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Quantity Updated',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }else{
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Only' .$cartData->product->quantity. 'Available',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }
            }
        }else{
            $this->dispatchBrowserEvent('message', [
                'text' => 'Something Went Wrong...',
                'type' => 'error',
                'status' => 404
            ]);
        }
    }

    public function increaseQuantity(int $cartId)
    {
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->productFlavour()->where('id', $cartData->product_flavour_id)->exists())
            {
                $productFlavour = $cartData->productFlavour()->where('id', $cartData->product_flavour_id)->first();
                if($productFlavour->quantity > $cartData->quantity)
                {
                    $cartData->increment('quantity');
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Quantity Updated',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }else{
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Only' .$productFlavour->quantity. 'Available',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }

                }else{
                if($cartData->product->quantity > $cartData->quantity)
                {
                    $cartData->increment('quantity');
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Quantity Updated',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }else{
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Only' .$cartData->product->quantity. 'Available',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }
            }
        
        }else{
            $this->dispatchBrowserEvent('message', [
                'text' => 'Something Went Wrong...',
                'type' => 'error',
                'status' => 404
            ]);
        }

    }

    public function removeCartItem(int $cartId)
    {
        $cartRemove = Cart::where('user_id', auth()->user()->id)->where('id', $cartId)->first();
        if($cartRemove){
            $cartRemove->delete();
            $this->emit('CartRemoveUpdated');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Cart Item Removed Successfully',
                'type' => 'success',
                'status' => 200
            ]);
        }else{
            $this->dispatchBrowserEvent('message', [
                'text' => 'Something Went Wrong...',
                'type' => 'error',
                'status' => 500
            ]);
        }
    }

    public function render()
    {
        $this->cart = Cart::where('user_id', auth()->user()->id)->get();
        return view('livewire.cart.cart-show',['cart' => $this->cart]);
    }
}
//***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 34: Show Cart items count using livewire event listeners in laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <28 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=x-izhuL-uU0&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=1>
// ***************************************************************************************/ -->
