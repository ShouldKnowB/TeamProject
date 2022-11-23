<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;
use App\Models\productFlavour;

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

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function productImages(){

        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function productFlavours(){
        return $this->hasMany(ProductFlavour::class, 'product_id', 'id');
    }

}
