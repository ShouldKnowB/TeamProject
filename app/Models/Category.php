<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;
    protected $table= 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'meta-title',
        'meta-keyword',
        'meta-description',
        'status',

    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}


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