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
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('role_as')->default('0')->comment('0=user, 1=admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_as');
        });
    }
};
/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 4: How to make Admin Middleware in laravel | redirect admin login to dashboard>
*   Author: <Funda of Web IT>
*   Date: <25 May 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=2Y5IJYZbaa8&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=8>
***************************************************************************************/