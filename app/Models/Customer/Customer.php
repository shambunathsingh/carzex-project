<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
}
