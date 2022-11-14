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
