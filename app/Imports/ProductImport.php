<?php

namespace App\Imports;

use App\Models\Product\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            $product = Product::where('name', $row['name'])->first();

            if ($product) {
                $product->update([
                    'description' => $row['description'],
                    'content' => $row['content'],
                    'images' => $row['images'],
                    'sku' => $row['sku'],
                    'price' => $row['price'],
                    'sale_price' => $row['sale_price'],
                    'cost_per_item' => $row['cost_per_item'],
                    'barcode' => $row['barcode'],
                    'start_date' => $row['start_date'],
                    'end_date' => $row['end_date'],
                    'quantity' => $row['quantity'],
                    'stock_status' => $row['stock_status'],
                    'weight' => $row['weight'],
                    'length' => $row['length'],
                    'wide' => $row['wide'],
                    'height' => $row['height'],
                    'has_product_options' => $row['has_product_options'],
                    'related_products' => $row['related_products'],
                    'cross_sale_products' => $row['cross_sale_products'],
                    'layout' => $row['layout'],
                    'is_popular' => $row['is_popular'],
                    'status' => $row['status'],
                    'store_id' => $row['store_id'],
                    'is_featured' => $row['is_featured'],
                    'categories' => $row['categories'],
                    'brand_id' => $row['brand_id'],
                    'product_collections' => $row['product_collections'],
                    'product_labels' => $row['product_labels'],
                    'taxes' => $row['taxes'],
                ]);
            } else {
                Product::create([
                    'name' => $row['name'],
                    'description' => $row['description'],
                    'content' => $row['content'],
                    'images' => $row['images'],
                    'sku' => $row['sku'],
                    'price' => $row['price'],
                    'sale_price' => $row['sale_price'],
                    'cost_per_item' => $row['cost_per_item'],
                    'barcode' => $row['barcode'],
                    'start_date' => $row['start_date'],
                    'end_date' => $row['end_date'],
                    'quantity' => $row['quantity'],
                    'stock_status' => $row['stock_status'],
                    'weight' => $row['weight'],
                    'length' => $row['length'],
                    'wide' => $row['wide'],
                    'height' => $row['height'],
                    'has_product_options' => $row['has_product_options'],
                    'related_products' => $row['related_products'],
                    'cross_sale_products' => $row['cross_sale_products'],
                    'layout' => $row['layout'],
                    'is_popular' => $row['is_popular'],
                    'status' => $row['status'],
                    'store_id' => $row['store_id'],
                    'is_featured' => $row['is_featured'],
                    'categories' => $row['categories'],
                    'brand_id' => $row['brand_id'],
                    'product_collections' => $row['product_collections'],
                    'product_labels' => $row['product_labels'],
                    'taxes' => $row['taxes'],
                ]);
            }
        }
    }
}
