{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

<div class="cartpage">
    <h4> My Cart</h4>
    <hr>
    <div class="row">

        <div class="col-md-12">
            <div class="cart-products">
                <div class="cart-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="cart-header">Products</h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="cart-header cart-centre">Price</h5>
                        </div>
                        <div class="col-md-2">
                            <h5 class="cart-header cart-centre">Quantity</h5>
                        </div>
                        <div class="col-md-1">
                            <h5 class="cart-header cart-centre">Total</h5>
                        </div>
                        <div class="col-md-2 remove-title">
                            <h5 class="cart-header cart-centre">Remove</h5>
                        </div>
                    </div>
                </div>

                <!-- example to check CSS code since nothing has been added to the cart yet
                <div class="cart-item">
                    <div class="row">
                        <div class = "col-md-6 my-auto">
                            <a href="#">
                                <label>
                                    <img class="cart-image" src="#">
                                    <h5 class="cart-name">Product Name</h5>
                                        <span id = "cart-item-flavour">- Flavour:</span>
                                    </label>
                            </a>
                        </div>
                        <div class="col-md-1 my-auto cart-centre">
                            <label class="cart-price">
                                <h5>£3</h5>
                            </label>
                        </div>
                        <div class="col-md-2 my-auto cart-centre">
                            <button type="button" class="quantitybtn"><i class="fa fa-minus" id="quantitybtn"></i></button>
                            <input type="text" value="" class="cart-quantity cart-centre" placeholder="0"/>
                            <button type="button" class="quantitybtn"><i class="fa fa-plus" id="quantitybtn"></i></button>
                        </div>
                        <div class="col-md-1 my-auto cart-centre">
                            <label class="cart-price">
                                <h4>...</h4>
                            </label>
                        </div>
                        <div class="col-md-2 my-auto cart-remove">
                            <a href="" class="cart-centre">
                                <h5 class="">X</h5>
                            </a>
                        </div>
                    </div>
                </div>
            <br>
            <br>

            end of example-->

                @forelse($cart as $cartItem)
                    @if ($cartItem->product)
                        <div class="cart-item">
                            <div class="row">
                                <div class="col-md-6 my-auto">
                                    <a
                                        href="{{ url('collections/' . $cartItem->product->category->slug . '/' . $cartItem->product->slug) }}">
                                        <label>
                                            @if ($cartItem->product->productImages)
                                                <img class="cart-image"
                                                    src="{{ asset($cartItem->product->productImages[0]->image) }}"
                                                    alt="cart item image">
                                            @else
                                                <img class="cart-image" src="" alt="">
                                            @endif
                                            <h4 class="cart-name">{{ $cartItem->product->name }}</h4>
                                            @if ($cartItem->productFlavour)
                                                @if ($cartItem->productFlavour->flavour)
                                                    <span id="cart-item-flavour">- Flavour:
                                                        {{ $cartItem->productFlavour->flavour->name }}</span>
                                                @endif
                                            @endif
                                        </label>
                                    </a>
                                </div>
                                <div class="col-md-1 my-auto cart-centre">
                                    <label class="cart-price">
                                        <h4>£ {{ $cartItem->product->price }}</h4>
                                    </label>
                                </div>
                                <div class="col-md-2 my-auto cart-centre">
                                    <button type="button" class="quantitybtn" wire:loading.attr="disabled"
                                        wire:click="decreaseQuantity({{ $cartItem->id }})" class="quantitybtn"><i
                                            class="fa fa-minus" id="quantitybtn"></i></button>
                                    <input type="text" value="{{ $cartItem->quantity }}"
                                        class="cart-quantity cart-centre" placeholder="0" />
                                    <button type="button" class="quantitybtn" wire:loading.attr="disabled"
                                        wire:click="increaseQuantity({{ $cartItem->id }})" class="quantitybtn"><i
                                            class="fa fa-plus" id="quantitybtn"></i></button>
                                </div>
                                <div class="col-md-1 my-auto cart-centre">
                                    <label class="cart-price">
                                        <h4>£ {{ $cartItem->product->price * $cartItem->quantity }}</h4>
                                    </label>
                                    @php
                                        $totalPrice += $cartItem->product->price * $cartItem->quantity;
                                    @endphp
                                </div>
                                <div class="col-md-2 my-auto cart-remove cart-centre">
                                    <button type="button" wire:loading.attr="disabled"
                                        wire:click="removeCartItem({{ $cartItem->id }})">
                                        <span wire:loading.remove wire:target="removeCartItem({{ $cartItem->id }})">
                                            <h5 class="">X</h5>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif

                @empty
                    <div>No Cart Items Added to Basket</div>
                @endforelse

                <br>
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4">
                        <div class="shadow-sm bg-white p-3">
                            <h4>Total: £<span>{{ $totalPrice }}</span></h4>
                            <hr>
                            <button href="" class="checkoutbtn">Pay & Go</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
