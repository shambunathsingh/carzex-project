<?php

namespace App\Models\Category;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'status',
        'order',
        'image',
        'is_featured',
        'background_color',
    ];



    public function products()
    {
        return $this->hasMany(Product::class, 'categories', 'id');
    }
}
