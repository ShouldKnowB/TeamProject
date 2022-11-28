<?php

namespace App\Models;

use App\Models\AllOrders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function all_orders(): HasMany
    {
        return $this->hasMany(AllOrders::class, 'order_id','id');

    }


}
