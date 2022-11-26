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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longText('description');

            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->mediumText('meta_description');

            $table->tinyInteger('status')->default('0')->comment('0=visible, 1=hidden');
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
        Schema::dropIfExists('categories');
    }
};

/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 6: Add Category in ecommerce with creating migration, model, controller>
*   Author: <Funda of Web IT>
*   Date: <28 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=D9QcZIhLSlA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=10>
***************************************************************************************/

/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 7: Category View, edit update, confirm delete using Livewire in Laravel>
*   Author: <Funda of Web IT>
*   Date: <29 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=G6iJjxYWczA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=11>
***************************************************************************************/

