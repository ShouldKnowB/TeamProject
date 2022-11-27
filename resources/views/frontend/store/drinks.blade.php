@extends('layouts.app')


<body class=shop>
    <div>
        <img class="shop-banner" src="{{ url('assets/images/punchbanner(1).png') }}" alt="banner">
    </div>
    @forelse ($categories as $categoryItem)
        <!-- BEGINNING OF ENERGY DRINKS SECTION  -->
        <div class="everythingOnThisDiv">
            @if ($categoryItem->id == 1)
                <table>
                    <table class="productTables">
                        <h1 class="productTables">{{ $categoryItem->name }}</h1>
                        <tr>
                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages energyImageSize"
                                        src="{{ asset('assets/images/product-images/Berry Blast cda6b2/Energy/berryBlastEnergyTransparent.png') }}"></a>
                                <br><br>

                                <div>
                                    <p class='drinkName'>BERRY BLAST</p>
                                </div>

                            </th>

                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages energyImageSize"
                                        src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Energy/blueRaspberryEnergyTransparent.png') }}"></a>
                                <br><br>
                                <div>
                                    <p class='drinkName'>BLUE RASPBERRY</p>
                                </div>

                            </th>

                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages energyImageSize"
                                        src="{{ url('assets/images/product-images/Lime and lemon ecf7e1/Energy/limeAndLemonEnergyTransparent.png') }}"></a>
                                <br><br>
                                <p class='drinkName'>LIME AND LEMON</p>
                                <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                    class="shopProductImages energyImageSize"
                                    src="{{ url('assets/images/product-images/Tropical ffe1b3/Energy/tropicalEnergyTransparent.png') }}"></a>
                            <br><br>
                            <p class='drinkName'>TROPICAL</p>

                        </th>

                        </th>
                        <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                    class="shopProductImages energyImageSize"
                                    src="{{ url('assets/images/product-images/Tart Cherry ffb6b6/Energy/tartCherryZeroSugarEnergyTransparent.png') }}"></a>
                            <br><br>
                            <p class='drinkName'>TART CHERRY</p>

                        </th>

                        </tr>
                    </table>
                </table>
                <table class="productTables">
                    <tr>
                        <th> <a href="{{ url('/store/' . $categoryItem->slug) }}"><button
                                    class="shopAddToCartButtonCSS">VIEW MORE</button></a></th>
                    </tr>
                </table>
            @endif

            <!-- END OF ENERGY DRINKS SECTION  -->

            <br><br>

            <!-- BEGINNING OF ZERO SUGAR DRINKS SECTION  -->

            @if ($categoryItem->id == 2)
                <table>
                    <table class="productTables">
                        <h1 class="productTables">{{ $categoryItem->name }}</h1>
                        <tr>
                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages carbonatedImageSize"
                                        src="{{ url('assets/images/product-images/Berry Blast cda6b2/Carbonated/berryBlastZeroSugarTransparent.png') }}"></a>
                                <br><br>
                                <div>
                                    <p class='drinkName'>BERRY BLAST</p>
                                </div>

                            </th>

                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages carbonatedImageSize"
                                        src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Carbonated/blueRaspberryZeroSugarTransparent.png') }}"></a>
                                <br><br>
                                <div>
                                    <p class='drinkName'>BLUE RASPBERRY</p>
                                </div>

                            </th>

                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages carbonatedImageSize"
                                        src="{{ url('assets/images/product-images/Lime and lemon ecf7e1/Carbonated/limeAndLemonZeroSugarTransparent.png') }}"></a>
                                <br><br>
                                <p class='drinkName'>LIME AND LEMON</p>

                                <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                    class="shopProductImages carbonatedImageSize"
                                    src="{{ url('assets/images/product-images/Tropical ffe1b3/Carbonated/tropicalZeroSugarTransparent.png') }}"></a>
                            <br><br>
                            <p class='drinkName'>TROPICAL</p>

                        </th>

                        </th>
                        <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                    class="shopProductImages carbonatedImageSize"
                                    src="{{ url('assets/images/product-images/Tart Cherry ffb6b6/Carbonated/tartCherryZeroSugarTransparent.png') }}"></a>
                            <br><br>
                            <p class='drinkName'>TART CHERRY</p>

                        </th>

                        </tr>
                    </table>
                </table>
                <table class="productTables">
                    <tr>
                        <th> <a href="{{ url('/store/' . $categoryItem->slug) }}"><button
                                    class="shopAddToCartButtonCSS">VIEW MORE</button></a></th>
                    </tr>
                </table>
            @endif

            <!-- END OF CARBONATED DRINKS SECTION  -->

            <br><br>

            <!-- BEGINNING OF HYDRATION DRINKS SECTION  -->
            @if ($categoryItem->id == 3)
                <table>
                    <table class="productTables">

                        <h1 class="productTables">{{ $categoryItem->name }}</h1>
                        <tr>
                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages hydrationImageSize"
                                        src="{{ url('assets/images/product-images/Berry Blast cda6b2/Hydration/berryBlastHydrationTransparent.png') }}"></a>
                                <br><br>
                                <div>
                                    <p class='drinkName'>BERRY BLAST</p>
                                </div>

                            </th>

                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages hydrationImageSize"
                                        src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Hydration/blueRaspberryHydrationTransparent.png') }}"></a>
                                <br><br>
                                <div>
                                    <p class='drinkName'>BLUE RASPBERRY</p>
                                </div>

                            </th>

                            <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                        class="shopProductImages hydrationImageSize"
                                        src="{{ url('assets/images/product-images/Lime and lemon ecf7e1/Hydration/limeAndLemonHydrationTransparent.png') }}"></a>
                                <br><br>
                                <p class='drinkName'>LIME AND LEMON</p>

                                <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                    class="shopProductImages hydrationImageSize"
                                    src="{{ url('assets/images/product-images/Tropical ffe1b3/Hydration/tropicalHydrationTransparent.png') }}"></a>
                            <br><br>
                            <p class='drinkName'>TROPICAL</p>

                        </th>

                        </th>
                        <th class="cellPaddingPX"><a href="{{ url('/store/' . $categoryItem->slug) }}"><img
                                    class="shopProductImages hydrationImageSize"
                                    src="{{ url('assets/images/product-images/Tart Cherry ffb6b6/Hydration/tartCherryHydrationTransparent.png') }}"></a>
                            <br><br>
                            <p class='drinkName'>TART CHERRY</p>

                        </th>

                        </tr>
                    </table>
                </table>
                <table class="productTables">
                    <tr>
                        <th> <a href="{{ url('/store/' . $categoryItem->slug) }}"><button
                                    class="shopAddToCartButtonCSS">VIEW MORE</button></a></th>
                    </tr>
                </table>
            @endif
        </div>
    @empty
        <div class="col-md-12">
            <h5>No Categories Available</h5>
        </div>
    @endforelse
</body>
<!-- END OF HYDRATION DRINKS SECTION  -->
