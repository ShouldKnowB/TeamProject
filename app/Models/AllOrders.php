<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AllOrders extends Model
{
    use HasFactory;

    protected $table = 'all_orders';

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }


}
