<?php

namespace App\Models\Carmodel;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brand\Brands;

class Carmodel extends Model
{
    use HasFactory;

    protected $table = 'carmodel';

    protected $fillable = [
        'id',
        'brand_id',
        'car_model',
        'status',
        'updated_at',
        'created_at'
    ];
    public function Brands()
    {
        return $this->belongsTo(Brands::class);
    }
}
