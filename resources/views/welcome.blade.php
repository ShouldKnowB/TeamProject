@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/js/app.js')
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ url('assets/css/main.css') }}" />
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel= "stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body >
        <div class="main">
        <div class="content">
            <h1>HYDRATION DRINK</h1>
            <a href="shop.php">SHOP DRINKS</a>
          </div>

        </div>

        <section>
          <div class="container">
            <div class="drinks">
              <a href="#" data-title="Drink #1"><img src="images/"></a>
              <a href="#" data-title="Drink #2"><img src="images/"></a>
              <a href="#" data-title="Drink #3"><img src="images/"></a>
              <a href="#" data-title="Drink #4"><img src="images/"></a>
              <a href="#" data-title="Drink #5"><img src="images/"></a>
              <a href="#" data-title="Drink #6"><img src="images/"></a>
            </div>
          </div>
        </section>

      </body>


    </div>
</html>
