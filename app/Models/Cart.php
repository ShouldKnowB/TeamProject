<?php

namespace App\Models;

use App\Models\Product;
use App\Models\ProductFlavour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'user_id', 'product_id', 'quantity'
    ];

    /**
     * Get the user that owns the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }




}

// <!-- /***************************************************************************************
// *   Title: <Laravel 9 Ecommerce -Part 33: Add to Cart - How to Add product to cart using Livewire in Laravel 9>
// *   Author: <Funda of Web IT>
// *   Date: <22 August 2022>
// *   Code version: <1.73.1>
// *   Availability: <YouTube>
//     Type:<Computer Program>
//     Web Address: <https://www.youtube.com/watch?v=Iy_KLHg4Yn0&list=PLnpvTT4vbVmsEBPxoJIccMoDsMcors8gG&index=3>
// ***************************************************************************************/ -->

