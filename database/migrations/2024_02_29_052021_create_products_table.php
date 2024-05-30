<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->strin('post_parent')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->text('post_excerpt')->nullable();
            $table->string('images')->nullable();
            $table->string('sku')->nullable();
            $table->string('parent_sku')->nullable();
            $table->string('children')->nullable();
            $table->string('downloadable')->nullable();
            $table->string('virtual')->nullable();
            $table->string('stock')->nullable();
            $table->string('price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('cost_per_item')->nullable();
            $table->string('barcode')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('quantity')->nullable();
            $table->string('stock_status')->nullable();
            $table->string('weight')->nullable();
            $table->string('length')->nullable();
            $table->string('wide')->nullable();
            $table->string('height')->nullable();
            $table->string('has_product_options')->nullable();
            $table->string('related_products')->nullable();
            $table->string('cross_sale_products')->nullable();
            $table->string('layout')->nullable();
            $table->string('is_popular')->nullable();
            $table->string('status')->nullable();
            $table->string('menu_order')->nullable();
            $table->string('store_id')->nullable();
            $table->string('is_featured')->nullable();
            $table->string('categories')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('product_collections')->nullable();
            $table->string('product_labels')->nullable();
            $table->string('taxes')->nullable();
            $table->string('tax_class')->nullable();
            $table->string('visibility')->nullable();
            $table->string('author')->nullable();
            $table->string('comment_status')->nullable();
            $table->string('backorders')->nullable();
            $table->string('sold_individually')->nullable();
            $table->string('low_stock_amount')->nullable();
            $table->string('manage_stock')->nullable();
            $table->string('tax_status')->nullable();
            $table->string('upsell_ids')->nullable();
            $table->string('crosssell_ids')->nullable();
            $table->string('purchase_note')->nullable();
            $table->string('sale_price_dates_from')->nullable();
            $table->string('sale_price_dates_to')->nullable();
            $table->string('download_limit')->nullable();
            $table->string('download_expiry')->nullable();
            $table->string('product_url')->nullable();
            $table->string('button_text')->nullable();
            $table->string('downloadable_files')->nullable();
            $table->string('product_page_url')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
