@extends('layouts.app')

<body>
    <div class="welcome">

        <!-- <video autoplay loop muted playsinline class="welcome-bg-video">
            <source src="{{ url('assets/images/punchVideo.mp4') }}" type="video/mp4">
            </video> -->

        <div class="welcome-bg">
            <h1>energise, hydrate, zero sugar</h1>
            <a href="{{ url('/store') }}">shop drinks</a>
        </div>

        <section class="welcome-about" id="about">
            <div class="about-img">
                <img src="{{ url('assets/images/V3-no-bg.png') }}">
            </div>

            <div class="about-text">
                <span>About Us</span>
                <h2>We are the ultime drink brand</h2>
                <p>It's a drink that's made with real fruit juice, natural caffeine and electrolytes. It's got no
                    sugar,
                    no
                    artificial sweeteners and no artificial colours. It's got a great taste and it's got a great
                    name.
                </p>
                <a href="{{ url('/about_us') }}" class="button">Find Out More</a>
            </div>
        </section>

        <section class="welcome-products" id="products">
            <div class="products-heading">
                <span>Drink menu</span>
                <h2>Our best selling products</h2>
            </div>

            <div class="product-container">
                <div class="box">
                    <div class="box-drinks">
                        <img
                            src="{{ asset('assets/images/product-images/Berry Blast cda6b2/Energy/berryBlastEnergyTransparent.png') }}">
                    </div>
                    <h2>Berry Blast</h2>
                    <h3>Bursting With Energy</h3>
                    <span>£3.00</span>
                    <i class="bx bx-cart-alt"></i>
                </div>

                <div class="box">
                    <div class="box-drinks">
                        <img
                            src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Carbonated/blueRaspberryZeroSugarTransparent.png') }}">
                    </div>
                    <h2>Blue Raspberry</h2>
                    <h3>Bursting With Flavour</h3>
                    <span>£3.00</span>
                    <i class="bx bx-cart-alt"></i>
                </div>

                <div class="box">
                    <div class="box-drinks">
                        <img
                            src="{{ url('assets/images/product-images/Lime and lemon ecf7e1/Hydration/limeAndLemonHydrationTransparent.png') }}">
                    </div>
                    <h2>Lime and Lemon</h2>
                    <h3>Bursting With Hydration</h3>
                    <span>£3.00</span>
                    <i class="bx bx-cart-alt"></i>
                </div>
            </div>
        </section>
    </div>
</body>
