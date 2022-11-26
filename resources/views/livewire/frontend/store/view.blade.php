<div>
    <div class="productview">
    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-auto">
                    <div class="bg-white border">
                        <img src="{{ asset($product->productImages[0]->image) }}" class="w-100" alt="Img">
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            {{$product->name}}
                            @if($product->quantity)
                            <label class="label-stock bg-success">In Stock</label>
                            @else
                            <label class="label-stock bg-danger">Out of Stock</label>
                            @endif
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / {{$product->category->name}} / {{$product->name}}
                        </p>
                        <div>
                            <span class="selling-price">£{{$product->price}}</span>
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1"wire:click="decrementQuantity"><i class="fa fa-minus"></i></span>
                                <input type="text" wire:model= "quantityCount" value="{{$this->quantityCount}}" readonly class="input-quantity" />
                                <span class="btn btn1"wire:click="incrementQuantity"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="button" wire:click="addToCart({{$product->id}})" class="btn btn1">
                            <i class="fa fa-shopping-cart"></i> Add To Cart
                            </button>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0 text-center  border bg-white ">Product Flavour Description</h5>
                            <p>
                                {!! $product->small_description!!}
                            </p>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header mx-autobg-white">
                            <h4 class=" text-center">Product Ingredients</h4>
                        </div>
                        <div class="card-body">
                            <p> {!! $product->ingredients!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 33: Add to Cart - How to Add product to cart using Livewire in Laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <22 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: https://www.youtube.com/watch?v=Iy_KLHg4Yn0&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=3>
// ***************************************************************************************/ -->
 <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 28: How to show success message in Livewire | Integrate Alertify JS in Laravel>
// *   Author: <Funda of Web IT>
// *   Date: <16 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=s-LW_HcpRg4&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=2>
// ***************************************************************************************/ -->

<!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 34: Show Cart items count using livewire event listeners in laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <28 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=x-izhuL-uU0&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=1>
// ***************************************************************************************/ -->
