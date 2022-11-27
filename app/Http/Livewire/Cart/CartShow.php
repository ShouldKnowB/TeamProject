<?php

namespace App\Http\Livewire\Cart;

use App\Models\Cart;
use App\Models\Order;
use Livewire\Component;
use App\Models\AllOrders;
use Illuminate\Support\Facades\Auth;

class CartShow extends Component
{
    public $cart;
    public $totalPrice = 0;

    public $order;

    public function decreaseQuantity(int $cartId)
    {
        $cartData = Cart::where('id', $cartId)->where('user_id', auth()->user()->id)->first();
        if($cartData)
        {
            if($cartData->quantity > 1)
                {
                    $cartData->decrement('quantity');
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Quantity Updated',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }else{
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Quantity cannot be less than 1',
                        'type' => 'success',
                        'status' => 200
                    ]);
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
            if($cartData->product()->where('id', $cartData->product__id)->exists())
            {
                $product = $cartData->product()->where('id', $cartData->product__id)->first();
                if($product->quantity < $cartData->quantity)
                {
                    $cartData->increment('quantity');
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Quantity Updated',
                        'type' => 'success',
                        'status' => 200
                    ]);
                }else{
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Only' .$product->quantity. 'Available',
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

    public function placeOrder()
    {
        $order = Order::create([
            'user_id' => auth()->user()->id,
            'fullname' => Auth::user()->name,
            'email' => Auth::user()->email,
            'orderstatus' => 'in progress',
        ]);

        foreach($this->cart as $cartItem){
            $allOrders = AllOrders::create([
                'order_id' => $order->id,
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        if($cartItem->product_id != NULL){
            $cartItem->product()->where('id',$cartItem->product_id)->decrement('quantity', $cartItem->quantity);
        }else{
            $cartItem->product()->where('id',$cartItem->product_id)->decrement('quantity', $cartItem->quantity);
        }
        }
        return $order;
    }


    public function decreaseStock()
    {
        if($this->placeOrder()){
            $dbStock = $products->quantity;
            foreach($this->cart as $cartItem){
                $dbStock = $dbStock - $cartItem->quantity;
            }
        }
    }

    public function codOrder(){
        $codOrder = $this->placeOrder();
            Cart::where('user_id', auth()->user()->id)->delete();
            $this->dispatchBrowserEvent('message', [
                'text' => 'Order Placed Successfully',
                'type' => 'success',
                'status' => 200
            ]);
            
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
