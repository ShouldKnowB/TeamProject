@extends('layouts.app')
@section('content')
<body class=shop>
    <div>
        <img class="shop-banner" src="{{ url('assets/images/punchbanner(1).png') }}" alt="banner">
    </div>
@forelse ($products as $productItem)

    <!-- BEGINNING OF ENERGY DRINKS SECTION  -->
    <div class="everythingOnThisDiv">
        <table>
            <table class="productTables">


        <h1 class="productTables">{{$productItem->name}}</h1>

        <th >
                    <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                </th>

                </table>

        <br><br>


@empty
<div class="col-md-12">
    <h5>No Categories Available</h5>
    </div>
    @endforelse
</body>
@endsection
