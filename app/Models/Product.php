<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;
use App\Models\ProductFlavour;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'small_description',
        'ingredients',
        'price',
        'quantity',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function productImages(){

        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

}


// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce - Part 11: Product read, edit update and delete with images in laravel>
// *   Author: <Funda of Web IT>
// *   Date: <16 June 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=PhDkujgfa4Y&list=PLRheCL1cXHruG6bV4tAIF4AhkUMaABf3F&index=12>
// *
// ***************************************************************************************/ -->