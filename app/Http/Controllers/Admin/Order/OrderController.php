<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\ProductOrder\ProductOrder;
use Illuminate\Http\Request;
use App\Models\Product\Product;

class OrderController extends Controller
{
    public function index()
    {
        $title = "Carzex - Orders";

        // Fetch all orders with related product orders
        $orders = Order::with('productOrders')->get();

        // Calculate total amount for each order
        foreach ($orders as $order) {
            $totalAmount = $order->productOrders->sum(function ($productOrder) {
                return $productOrder->subtotal;
            });
            $order->totalAmount = $totalAmount;
        }

        // Return the view with the homepage data
        return view('admin.order.index', [
            'title' => $title,
            'orders' => $orders
        ]);
    }
    public function invoices()
    {
        $title = "Carzex - invoices";

        // Fetch all orders with related product orders
        $orders = Order::with('productOrders')->get();

        // Calculate total amount for each order
        foreach ($orders as $order) {
            $totalAmount = $order->productOrders->sum(function ($productOrder) {
                return $productOrder->subtotal;
            });
            $order->totalAmount = $totalAmount;
        }

        // Return the view with the homepage data
        return view('admin.invoices.index', [
            'title' => $title,
            'orders' => $orders
        ]);
    }
    public function delete_order($id)
    {
        $Order = Order::findOrFail($id);
        $Order->delete();

        return redirect()->back()->with('success', 'Order deleted successfully.');
    }
    public function edit_invoices($id)
    {
        $title = "Carzex - Edit Order";
        $edit_invoices = Order::with('productOrders')->find($id);

        if (!$edit_invoices) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        return view('admin.invoices.edit_invoices', compact('edit_invoices', 'title'));
    }

    public function edit_order($id)
    {
        $title = "Carzex - Edit Order";
        $edit_order = Order::with('productOrders.product')->find($id);
        // $products = Product::all();  // Fetch all products or specific ones based on your requirements
        return view('admin.order.edit_order', compact('edit_order', 'title'));
    }
}
