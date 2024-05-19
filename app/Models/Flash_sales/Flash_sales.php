<?php

namespace App\Models\Flash_sales;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flash_sales extends Model
{
    use HasFactory;

    protected $table = 'flash_sales';

    protected $fillable = [
        'name',
        'end_date',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $dates = [
        'end_date',
        'created_at',
        'updated_at'
    ];
}
