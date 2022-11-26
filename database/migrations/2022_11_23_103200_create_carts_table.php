<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('product_id');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
};

// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 33: Add to Cart - How to Add product to cart using Livewire in Laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <22 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: https://www.youtube.com/watch?v=Iy_KLHg4Yn0&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=3>
// ***************************************************************************************/ -->

