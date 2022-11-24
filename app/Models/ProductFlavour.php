<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFlavour extends Model
{
    use HasFactory;

    protected $table = "products_flavours";

    protected $fillable =[
        'product_id',
        'flavours_id',
        'quantity'
    ];

    public function flavour()
    {
        return $this->belongsTo(Flavours::class, 'flavours_id', 'id');
    }
}
