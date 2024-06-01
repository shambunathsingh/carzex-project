<?php

namespace App\Models\Order;

use App\Models\ProductOrder\ProductOrder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillabe = [
        'customer_id',
        'order_id',
        'first_name',
        'last_name',
        'company_name',
        'country',
        'street_address',
        'street_address2',
        'town_city',
        'state',
        'pin_code',
        'phone',
        'email',
        'account_username',
        'order_notes',
        'is_paid',
    ];

    public function productOrders()
    {
        return $this->hasMany(ProductOrder::class);
    }
}
