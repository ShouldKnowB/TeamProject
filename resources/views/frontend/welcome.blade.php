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
                <h2>We are the ultimate drink brand</h2>
                <p>It's a drink made from real fruits, natural caffeine, and electrolytes. It contains no sugar,
                    artificial sweeteners or artificial colours. It has amazing taste and a great name.
                </p>
                <a href="{{ url('/about_us') }}" class="button">Find Out More</a>
            </div>
        </section>

        <section class="welcome-products" id="products">
            <div class="products-heading">
                <h2>Our best selling products</h2>
            </div>

            <div class="product-container">
                <div class="box">
                    <div class="box-drinks">
                        <img class="images"
                            src="{{ asset('assets/images/product-images/Berry Blast cda6b2/Energy/berryBlastEnergyTransparent.png') }}">
                    </div>
                    <h2>Berry Blast</h2>
                    <h3>Energy drink</h3>
                    <span>£3.00</span>
                </div>

                <div class="box">
                    <div class="box-drinks">
                        <img class="images"
                            src="{{ url('assets/images/product-images/Blue Raspberry b836ff/Carbonated/blueRaspberryZeroSugarTransparent.png') }}">
                    </div>
                    <h2>Blue Raspberry</h2>
                    <h3>Zero sugar drink</h3>
                    <span>£3.00</span>
                </div>

                <div class="box">
                    <div class="box-drinks">
                        <img class="images"
                            src="{{ url('assets/images/product-images/Lime and lemon ecf7e1/Hydration/limeAndLemonHydrationTransparent.png') }}">
                    </div>
                    <h2>Lime and Lemon</h2>
                    <h3>Hydration drink</h3>
                    <span>£5.00</span>
                </div>
            </div>
        </section>

        <section class="welcome-contact">
            <h2>Our drinks are carefully produced for<br> you everyday</h2>
            <a href="{{ url('/contact_us') }}" class="button">Contact Us</a>
        </section>
    </div>
</body>
