<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce Product View Design</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                        <img src="hp-laptop.jpg" class="w-100" alt="Img">
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                            HP Laptop 15IQasd54
                            <label class="label-stock bg-success">In Stock</label>
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / Category / Product / HP Laptop
                        </p>
                        <div>
                            <span class="selling-price">$399</span>
                            <span class="original-price">$499</span>
                        </div>
                        <div class="mt-2">
                            <div class="input-group">
                                <span class="btn btn1"><i class="fa fa-minus"></i></span>
                                <input type="text" value="1" class="input-quantity" />
                                <span class="btn btn1"><i class="fa fa-plus"></i></span>
                            </div>
                        </div>
                        <div class="mt-2">
                            <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
                        </div>
                        <div class="mt-3">
                            <h5 class="mb-0">Small Description</h5>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a ty
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header bg-white">
                            <h4>Description</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
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
