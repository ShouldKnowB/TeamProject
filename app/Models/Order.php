<?php

namespace App\Models;

use App\Models\AllOrders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'fullname',
        'email',
        'orderstatus'

    ];

    public function all_orders(){

        return $this->hasMany(AllOrders::class, 'order_id','product_id','quantity','price');
    }
}
