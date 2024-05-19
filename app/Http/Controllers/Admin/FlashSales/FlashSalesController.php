<?php

namespace App\Http\Controllers\Admin\FlashSales;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\ProductOrder\ProductOrder;
use App\Models\Flash_sales\Flash_sales;
use Illuminate\Http\Request;

class FlashSalesController extends Controller
{
    public function store_flash_sales(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'end_date' => 'required|date',
            'status' => 'nullable|boolean',
        ]);

        $flashSales = new Flash_sales();
        $flashSales->name = $request->name;
        $flashSales->end_date = $request->end_date;
        $flashSales->status = $request->status;

        $flashSales->save();

        return redirect()->back()->with('success', 'Flash sale created successfully.');
    }

    public function update_flash_sales(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'end_date' => 'required|date',
            'status' => 'nullable|boolean',
        ]);

        $flashSales = Flash_sales::findOrFail($id);

        $flashSales->name = $request->name;
        $flashSales->end_date = $request->end_date;
        $flashSales->status = $request->status;

        $flashSales->save();

        return redirect()->back()->with('success', 'Flash sale updated successfully.');
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
