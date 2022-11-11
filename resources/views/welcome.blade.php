@extends('layouts.app')

<body>
    <div class="content">
        <h1>energise, hydrate, zero sugar</h1>
        <a href="{{ asset('/shop') }}">shop drinks</a>
    </div>

    <div class="welcome-body">
        <div class="welcome-body-text">
            <h1>what is it?</h1>
            <p>It's a drink that's made with real fruit juice, natural caffeine and electrolytes. It's got no sugar, no
                artificial sweeteners and no artificial colours. It's got a great taste and it's got a great name.</p>
        </div>
        <div class="welcome-body-image">
            <img src="{{ url('assets/images/punch.png') }}" alt="banner" width="1023" height="546">
        </div>
    </div>
</body>
