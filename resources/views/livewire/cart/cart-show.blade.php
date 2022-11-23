
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
                        <div class="col-md-2">
                            <h5 class="cart-header">Price</h5>
                        </div>
                        <div class="col-md-2">
                            <h5 class="cart-header">Quantity</h5>
                        </div>
                        <div class="col-md-2 remove-title">
                            <h5 class="cart-header">Remove</h5>
                        </div>
                    </div>
                </div>
                
                
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
                                        <span>- Flavour: {{ $cartItem->productFlavour->flavour->name}}</span>
                                        @endif
                                    @endif
                                    </label>
                            </a>
                        </div>
                        <div class="col-md-2 my-auto">
                            <label class="cart-price">
                                <h4>{{ $cartItem->product->price}}</h4>
                            </label>
                        </div>
                        <div class="col-md-2 my-auto">
                            <input type="number" id="cart-quantity" name="cart-quantity" min="1" max="5" value="{{ $cartItem->quantity}}">
                        </div>
                        <div class="col-md-2 my-auto cart-remove">
                            <a href="" class= "remove-btn">
                                <h5 class="">X</h5>
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

    
