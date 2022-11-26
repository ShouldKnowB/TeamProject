@extends('layouts.app')


<body class=shop>
    <div>
        <img class="shop-banner" src="{{ url('assets/images/punchbanner(1).png') }}" alt="banner">
    </div>

    <!-- BEGINNING OF ENERGY DRINKS SECTION  -->
    <div class="everythingOnThisDiv">
        @forelse ($products as $productItem)
        @if($productItem->category_id == 1 )
        <table>
            <table class="productTables">
                <h1 class="productTables">Punch Energy</h1>
                <tr>
                    @if($productItem->slug == 'berry-blast')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages energyImageSize"
                                src="{{ asset('assets/images/product-images/Berry Blast cda6b2/Energy/berryBlastEnergyTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif

                    @if($productItem->slug == 'blue-raspberry')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages energyImageSize"
                                src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Energy/blueRaspberryEnergyTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif

                    @if($productItem->slug == 'lime-n-lemon')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages energyImageSize"
                                src="{{ url('assets/images/product-images/Lime and lemon ecf7e1/Energy/limeAndLemonEnergyTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                </tr>
            </table>

            <table class="productTables">
                <tr>
                    @if($productItem->slug == 'tropical')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages energyImageSize"
                                src="{{ url('assets/images/product-images/Tropical ffe1b3/Energy/tropicalEnergyTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif

                    </th>
                    @if($productItem->slug == 'tart-cherry')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages energyImageSize"
                                src="{{ url('assets/images/product-images/Tart Cherry ffb6b6/Energy/tartCherryZeroSugarEnergyTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                </tr>
            </table>

        </table>
        @endif

        <!-- END OF ENERGY DRINKS SECTION  -->

        <br><br>

        <!-- BEGINNING OF ZERO SUGAR DRINKS SECTION  -->

        @if($productItem->category_id == 2)
        <table>
            <table class="productTables">
                <h1 class="productTables">Punch Zero Sugar</h1>
                <tr>
                    @if($productItem->slug == 'berry-blast')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages carbonatedImageSize"
                                src="{{ url('assets/images/product-images/Berry Blast cda6b2/Carbonated/berryBlastZeroSugarTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif

                    @if($productItem->slug == 'blue-raspberry')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages carbonatedImageSize"
                                src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Carbonated/blueRaspberryZeroSugarTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif

                    @if($productItem->slug == 'lime-n-lemon')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages carbonatedImageSize"
                                src="{{ url('assets/images/product-images/Lime and lemon ecf7e1/Carbonated/limeAndLemonZeroSugarTransparent.png') }}"></a>
                        <br><br>
                        <p class='drinkName'>{{$productItem->name}}</p>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                </tr>
            </table>

            <table class="productTables">
                <tr>
                    @if($productItem->slug == 'tropical')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages carbonatedImageSize"
                                src="{{ url('assets/images/product-images/Tropical ffe1b3/Carbonated/tropicalZeroSugarTransparent.png') }}"></a>
                        <br><br>
                        <p class='drinkName'>{{$productItem->name}}</p>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                    @if($productItem->slug == 'tart-cherry')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages carbonatedImageSize"
                                src="{{ url('assets/images/product-images/Tart Cherry ffb6b6/Carbonated/tartCherryZeroSugarTransparent.png') }}"></a>
                        <br><br>
                        <p class='drinkName'>{{$productItem->name}}</p>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                </tr>
            </table>

        </table>
        @endif

        <!-- END OF CARBONATED DRINKS SECTION  -->

        <br><br>

        <!-- BEGINNING OF HYDRATION DRINKS SECTION  -->
        @if($productItem->category_id == 3 )
        <table>
            <table class="productTables">
                <h1 class="productTables">Punch Hydration</h1>
                <tr>
                    @if($productItem->slug == 'berry-blast')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages hydrationImageSize"
                                src="{{ url('assets/images/product-images/Berry Blast cda6b2/Hydration/berryBlastHydrationTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                    @if($productItem->slug == 'blue-raspberry')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages hydrationImageSize"
                                src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Hydration/blueRaspberryHydrationTransparent.png') }}"></a>
                        <br><br>
                        <div>
                            <p class='drinkName'>{{$productItem->name}}</p>
                        </div>
                        <a href{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif

                    @if($productItem->slug == 'lime-n-lemon')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages hydrationImageSize"
                                src="{{ url('assets/images/product-images/Lime and lemon ecf7e1/Hydration/limeAndLemonHydrationTransparent.png') }}"></a>
                        <br><br>
                        <p class='drinkName'>{{$productItem->name}}</p>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                </tr>
            </table>



            <table class="productTables">
                <tr>
                    @if($productItem->slug == 'tropical')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages hydrationImageSize"
                                src="{{ url('assets/images/product-images/Tropical ffe1b3/Hydration/tropicalHydrationTransparent.png') }}"></a>
                        <br><br>
                        <p class='drinkName'>{{$productItem->name}}</p>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                    @if($productItem->slug == 'tart-cherry')
                    <th class="cellPaddingPX"><a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><img class="shopProductImages hydrationImageSize"
                                src="{{ url('assets/images/product-images/Tart Cherry ffb6b6/Hydration/tartCherryHydrationTransparent.png') }}"></a>
                        <br><br>
                        <p class='drinkName'>{{$productItem->name}}</p>
                        <a href="{{url('/store/'.$productItem->category->slug.'/'.$productItem->slug)}}"><button class="shopAddToCartButtonCSS">SHOP</button></a>
                    </th>
                    @endif
                </tr>
            </table>

        </table>
        @endif
    </div>
@empty
<div class="col-md-12">
    <h5>No Products Available</h5>
    </div>
    @endforelse
</body>
<!-- END OF HYDRATION DRINKS SECTION  -->
