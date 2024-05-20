<?php

namespace App\Http\Controllers\Admin\FlashSales;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\ProductOrder\ProductOrder;
use App\Models\Flash_sales\Flash_sales;
use Illuminate\Http\Request;
use App\Models\Product\Product;

class FlashSalesController extends Controller
{
    public function store_flash_sales(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'subtitle' => 'required|string',
            'end_date' => 'required|date',
            'status' => 'required|string'
        ]);
        // print_r($request);

        $flashSales = new Flash_sales();
        $flashSales->name = $request->name;
        $flashSales->subtitle = $request->subtitle;
        $flashSales->end_date = $request->end_date;
        $flashSales->status = $request->status;

        $flashSales->save();

        return redirect()->back()->with('success', 'Flash sale created successfully.');
    }


    public function update_flash_sales(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'subtitle' => 'required|string',
            'end_date' => 'required|date',
            'status' => 'required|string'

        ]);

        $flashSales = Flash_sales::findOrFail($id);

        $flashSales->name = $request->name;
        $flashSales->subtitle = $request->subtitle;
        $flashSales->end_date = $request->end_date;
        $flashSales->status = $request->status;

        $flashSales->save();

        return redirect()->back()->with('success', 'Flash sale updated successfully.');
    }
    public function search_flash_sales_products(Request $request)
    {
        $query = $request->input('query');

        // Search products by multiple fields
        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('slug', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->orWhere('images', 'LIKE', "%{$query}%")
            ->orWhere('sku', 'LIKE', "%{$query}%")
            ->orWhere('price', 'LIKE', "%{$query}%")
            ->orWhere('sale_price', 'LIKE', "%{$query}%")
            ->orWhere('cost_per_item', 'LIKE', "%{$query}%")
            ->orWhere('barcode', 'LIKE', "%{$query}%")
            ->orWhere('start_date', 'LIKE', "%{$query}%")
            ->orWhere('end_date', 'LIKE', "%{$query}%")
            ->orWhere('quantity', 'LIKE', "%{$query}%")
            ->orWhere('stock_status', 'LIKE', "%{$query}%")
            ->orWhere('weight', 'LIKE', "%{$query}%")
            ->orWhere('length', 'LIKE', "%{$query}%")
            ->orWhere('wide', 'LIKE', "%{$query}%")
            ->orWhere('height', 'LIKE', "%{$query}%")
            ->orWhere('has_product_options', 'LIKE', "%{$query}%")
            ->orWhere('related_products', 'LIKE', "%{$query}%")
            ->orWhere('cross_sale_products', 'LIKE', "%{$query}%")
            ->get();

        return response()->json($products);
    }

    public function suggestions_flash_sales(Request $request)
    {
        $query = $request->input('query');
        $suggestions = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('slug', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->orWhere('sku', 'LIKE', "%{$query}%")
            ->orWhere('barcode', 'LIKE', "%{$query}%")
            ->limit(10)
            ->get(['name', 'slug']);

        return response()->json($suggestions);
    }

    public function delete_flash_sales($id)
    {
        $flashSales = Flash_sales::findOrFail($id);
        $flashSales->delete();

        return redirect()->back()->with('success', 'Flash sale deleted successfully.');
    }

    // Flash sales listing
    public function flash_sales()
    {
        $title = "Carzex - Flash Sales";

        $flash_sales_list = Flash_sales::all();

        return view('admin.ecommerce.flash_sales', compact('title', 'flash_sales_list'));
    }

    public function create_product_flash_sales()
    {
        $title = "Carzex - New Flash Sale";

        return view('admin.ecommerce.add_flash_sales', ['title' => $title]);
    }

    public function edit_product_flash_sales($id)
    {
        $title = "Carzex - Edit Flash Sale";
        $flashSales = Flash_sales::find($id);

        return view('admin.ecommerce.edit_flash_sales', compact('flashSales', 'title'));
    }
}
