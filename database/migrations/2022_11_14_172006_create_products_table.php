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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('slug');
            $table->mediumText('small_description')->nullable();
            $table->longText('ingredients')->nullable();

            $table->Integer('price');
            $table->Integer('quantity');
            $table->tinyInteger('status')->default('0')->comment('1=hidden,0=visible');
            $table->string('meta_title');
            $table->mediumText('meta_keyword')->nullable();
            $table->mediumText('meta_description')->nullable();

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
        Schema::dropIfExists('products');
    }
};
