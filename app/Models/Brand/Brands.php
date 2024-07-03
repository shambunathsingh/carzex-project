<?php

namespace App\Models\Brand;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carmodel\Carmodel;


class Brands extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'name',
        'description',
        'status',
        'website',
        'order',
        'logo',
        'featured',
    ];
    public function Carmodel()
    {
        return $this->belongsTo(Carmodel::class);
    }
}
