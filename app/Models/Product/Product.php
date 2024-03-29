<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
