<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';

    protected $fillable = [
        'product_id',
        'image'
    ];
}
/***************************************************************************************
*   Title: <Laravel 9 Ecom - Part 10: Add Product w/ multiple Images using relationship & validation in laravel>
*   Author: <Funda of Web IT>
*   Date: <10 June 2022>
*   Code version: <1.73.1>
*   Availability: <YouTube>
    Type:<Computer Program>
    Web Address: <https://www.youtube.com/watch?v=9roKu4-uPxA&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=12>
*
***************************************************************************************/