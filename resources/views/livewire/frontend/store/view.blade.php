<div>
<head>
    <link href="{{ asset('assets/css/product.css') }}" rel="stylesheet">
    <title>Product View</title>
</head>

<body>

    <div class="images">
        <div class="row">
            <div class="col">

                <div class="slider">
                    <!--<div class="product">

                        <img src="{{ asset($product->productImages[0]->image) }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">

                    </div>-->
                    <div class="preview">
                        @if($product->productImages)
                        <img src="{{ asset($product->productImages[0]->image) }}" id="imagebox" alt="">
                        @else
                        No Image Added
                        @endif
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="product-view">
                    <h2 class="product-name">
                        {{$product->name}}
                        <label class="label-stock bg-success">In Stock</label>
                    </h2>

                    <p class="product-path">
                        Home / {{$product->category->name}} / {{$product->name}}
                    </p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <span class="price">£{{$product->price}}</span>
                    <div class="flavours">
                        @if($product->productFlavour)
                        @foreach ($product->productFlavour as $flavourItem )
                        <p>Flavours:<select name="flavourSelection">
                            <option value="{{$flavourItem->id}}">{{$flavourItem->flavour->name}}</option>
                        </select></p>
                        @endforeach
                        @endif
                    </div>
                    <p>Quantity: <input type="text" value="1"></p>
                    <button type="button">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart</button>
                </div>
             <div class="small-description">
                 <h4>Description</h4>
                 <p>
                     {!! $product->small_description!!}
                 </p>
             </div>
             <div class="small-description">
                <h4>Ingredients</h4>
                <p>
                    {!! $product->ingredients!!}
                </p>
            </div>

    </div>
</div>


    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }
    </script>

</body>
</div>
</div>
