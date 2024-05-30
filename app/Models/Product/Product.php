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
        'slug',
        'post_parent',
        'description',
        'content',
        'post_excerpt',
        'images',
        'sku',
        'parent_sku',
        'children',
        'downloadable',
        'virtual',
        'stock',
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
        'status',
        'menu_order',
        'store_id',
        'is_featured',
        'categories',
        'brand_id',
        'product_collections',
        'product_labels',
        'taxes',
        'tax_class',
        'visibility',
        'author',
        'comment_status',
        'backorders',
        'sold_individually',
        'low_stock_amount',
        'manage_stock',
        'tax_status',
        'upsell_ids',
        'crosssell_ids',
        'purchase_note',
        'sale_price_dates_from',
        'sale_price_dates_to',
        'download_limit',
        'download_expiry',
        'product_url',
        'button_text',
        'downloadable_files',
        'product_page_url',
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
