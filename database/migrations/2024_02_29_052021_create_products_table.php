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
            $table->string('description')->nullable();
            $table->string('content')->nullable();
            $table->string('images')->nullable();
            $table->string('sku')->nullable();
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
            $table->string('store_id')->nullable();
            $table->string('is_featured')->nullable();
            $table->string('categories')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('product_collections')->nullable();
            $table->string('product_labels')->nullable();
            $table->string('taxes')->nullable();
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
