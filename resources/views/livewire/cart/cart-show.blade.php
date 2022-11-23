
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
    
                        <div class="cart-item">

                            <div class="row">
                                <div class = "col-md-1">
                                    <img class="cart-image" src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Energy/blueRaspberryEnergyTransparent.png') }}">
                                </div>
                                <div class = "col-md-5">
                                    <h5 class="cart-name"><a href="{{ asset('/shop') }}">Blue Raspberry - Energy</a></h5>
                                </div>
                                <div class="col-md-2 cart-price">
                                    <h5>£_.__</h5>
                                </div>
                                <div class="col-md-2">
                                    <input type="number" id="cart-quantity" name="cart-quantity" min="1" max="5" value="1">
                                </div>
                                <div class="col-md-2">
                                    <h5 class="cart-remove">X</h5>
                                </div>
                            </div>

                    
<!--database

                 
                    <div class="row">
                        <div class = "col-md-1">
                            <img class="cart-image" src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Energy/blueRaspberryEnergyTransparent.png') }}">
                        </div>
                        <div class = "col-md-5">
                            <h5 class="cart-name"><a href="{{ asset('/shop') }}">Blue Raspberry - Energy</a></h5>
                        </div>
                        <div class="col-md-2 cart-price">
                            <h5>£_.__</h5>
                        </div>
                        <div class="col-md-2">
                            <input type="number" id="cart-quantity" name="cart-quantity" min="1" max="5" value="1">
                        </div>
                        <div class="col-md-2">
                            <h5 class="cart-remove">X</h5>
                        </div>
                    </div>

-->

                </div>
            </div>
        </div>
    </div>

    
