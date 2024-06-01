<?php

namespace App\Models\Order;

use App\Models\ProductOrder\ProductOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_p extends Model
{
    use HasFactory;

    protected $table = "p_orders";

    protected $fillable = [
        'id',
        'order_id',
        'product_id',
        'quantity',
        'subtotal',
        'is_paid',
        'coupon',
        'payment_method',
        'payment_id',
        'order_token',
        'created_at',
        'updated_at'
    ];
}
