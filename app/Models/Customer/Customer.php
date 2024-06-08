<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Order\Order;
use App\Models\CartDetail;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'guest_id',
        'name',
        'email',
        'dob',
        'phone',
        'password',
        'status'
    ];
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }
    public function cartItems()
    {
        return $this->hasMany(CartDetail::class);
    }
}
