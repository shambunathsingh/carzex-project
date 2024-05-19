<?php

namespace App\Models\Product;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'content',
        'images',
        'sku',
        'price',
        'sale_price',
        'cost_per_item',
        'barcode',
        'start_date',
        'end_date',
        'quantity',
        'stock_status',
        'weight',
        'length',
        'wide',
        'height',
        'has_product_options',
        'related_products',
        'cross_sale_products',
        'layout',
        'is_popular',
        'status' => 'required|string',
        'store_id',
        'is_featured',
        'categories',
        'brand_id',
        'product_collections',
        'product_labels',
        'taxes',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories', 'id');
    }
     public static function generateSlug($title)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (static::whereSlug($slug)->exists()) {
            $slug = "{$originalSlug}-{$count}";
            $count++;
        }

        return $slug;
    }
}
