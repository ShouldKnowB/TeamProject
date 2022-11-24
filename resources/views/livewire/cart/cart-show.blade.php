
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    
<div class = "cartpage">
    <h4> My Cart</h4>
    <hr>
    <div class ="row">
        
        <div class = "col-md-12">
            <div class="cart-products">
                <div class="cart-header" >
                    <div class="row ">
                        <div class="col-md-6" >
                            <h5 class="cart-header">Products</h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="cart-header">Price</h5>
                        </div>
                        <div class="col-md-2">
                            <h5 class="cart-header">Quantity</h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="cart-header">Total</h5>
                        </div>
                        <div class="col-md-2 remove-title">
                            <h5 class="cart-header">Remove</h5>
                        </div>
                    </div>
                </div>

                <!-- example to check CSS code since nothing has been added to the cart yet -->
                <div class="cart-item">
                    <div class="row">
                        <div class = "col-md-6 my-auto">
                            <a href="#">
                                <label>
                                    <img class="cart-image" src="#">
                                    <h4 class="cart-name">blah</h4>
                                        <span id = "cart-item-flavour">- Flavour:</span>
                                    </label>
                            </a>
                        </div>
                        <div class="col-md-1 my-auto">
                            <label class="cart-price">
                                <h4>£3</h4>
                            </label>
                        </div>
                        <div class="col-md-2 my-auto">
                            <button type="button" class="quantitybtn"><i class="fa fa-minus" id="quantitybtn"></i></button>
                            <input type="text" value="" class="cart-quantity" placeholder="0"/>
                            <button type="button" class="quantitybtn"><i class="fa fa-plus" id="quantitybtn"></i></button>
                        </div>
                        <div class="col-md-1 my-auto">
                            <label class="cart-price">
                                <h4>...</h4>
                            </label>
                        </div>
                        <div class="col-md-2 my-auto cart-remove">
                            <a href="" class= "remove-btn">
                                <h5 class="">X</h5>
                            </a>
                        </div>
                    </div>
                </div>

            <!---end of example-->       
                
                @forelse($cart as $cartItem)
                    @if($cartItem->product)
                    <div class="cart-item">
                        <div class="row">
                        <div class = "col-md-6 my-auto">
                            <a href="{{ url('collections/'.$cartItem->product->category->slug.'/'.$cartItem->product->slug) }}">
                                <label>
                                    @if($cartItem->product->productImages)
                                    <img class="cart-image" src="{{ asset($cartItem->product->productImages[0]->image) }}" alt="cart item image">
                                    @else
                                    <img class="cart-image" src="" alt="">
                                    @endif

                                    <h4 class="cart-name">{{ $cartItem->product->name }}</h4>

                                    @if ($cartItem->productFlavour)
                                        @if($cartItem->productFlavour->flavour)
                                        <span  id = "cart-item-flavour">- Flavour: {{ $cartItem->productFlavour->flavour->name}}</span>
                                        @endif
                                    @endif
                                    </label>
                            </a>
                        </div>
                        <div class="col-md-1 my-auto">
                            <label class="cart-price">
                                <h4>{{ $cartItem->product->price}}</h4>
                            </label>
                        </div>
                        <div class="col-md-2 my-auto">
                            <button type="button" wire:loading.attr="disabled" wire:click= "decreaseQuantity({{$cartItem->id}})" class="quantitybtn"><i class="fa fa-minus" id="quantitybtn"></i></button>
                            <input type="text" value="{{ $cartItem->quantity}}" class="cart-quantity" placeholder="0"/>
                            <button type="button" wire:loading.attr="disabled" wire:click= "increaseQuantity({{$cartItem->id}})" class="quantitybtn"><i class="fa fa-plus" id="quantitybtn"></i></button>
                        </div>
                        <div class="col-md-1 my-auto">
                            <label class="cart-price">
                                <h4>{{ $cartItem->product->price * $cartItem->quantity}}</h4>
                            </label>
                        </div>
                        <div class="col-md-2 my-auto cart-remove">
                            <button type="button" wire:loading.attr="disabled" wire:click="removeCartItem({{$cartItem->id}})" class= "remove-btn">
                                <span wire:loading.remove wire:target="removeCartItem({{$cartItem->id}})">
                                    <h5 class="">X</h5>
                                </span>
                                <span wire:loading.remove wire:target="removeCartItem({{$cartItem->id}})">
                                    <h5 class="">Removing...</h5>
                                </span>
                            </a>
                        </div>
                        </div>
                    </div>
                    @endif

                @empty
                    <div>No Cart Items Available</div>
                @endforelse
                
            </div>
        </div>
    </div>

    
