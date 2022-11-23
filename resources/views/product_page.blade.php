@extends('layouts.app')
@section('content')
<head>
    <link href="{{ asset('assets/css/product.css') }}" rel="stylesheet">
    <title>Product Detail</title>


</head>

<body>
<div>products
    <div class="hero">
        <div class="row">
            <div class="col">

                <div class="slider">
                    <div class="product">

                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" alt="" onclick="clickme(this)">

                    </div>
                    <div class="preview">
                        <img src="{{ url('images1/Energy/BerryBlast.jpg') }}" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="content">

                    <h2>punch ENERGY DRINKS</h2>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p class="price">Price: £ 3.00</p>
                    <p>Flavours: <select name="Flavours">

                            <option value="select Flavour">select Flavour</option>
                            <option value="Berry Blast">Berry Blast</option>
                            <option value="Blue Raspberry">Blue Raspberry</option>
                            <option value="Lime n Lemon">Lime n Lemon</option>
                            <option value="Tropical">Tropical</option>
                            <option value="Tart Cherry">Tart Cherry</option>

                        </select></p>
                    <p>Quantity: <input type="text" value="1"></p>
                    <button type="button">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart</button>
                </div>

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
@endsection
