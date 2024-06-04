<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\ProductOrder\ProductOrder;
use Illuminate\Http\Request;
use App\Models\Product\Product;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $title = "Carzex - Orders";
        $perPage = $request->get('perPage', 10);

        // Fetch paginated orders with related product orders
        $orders = Order::with('productOrders')
            ->paginate($perPage);

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
            'orders' => $orders,
            'perPage' => $perPage
        ]);
    }

    public function getOrders(Request $request)
    {
        $perPage = $request->get('perPage', 10);
        $orders = Order::with('productOrders')
            ->paginate($perPage);

        foreach ($orders as $order) {
            $totalAmount = $order->productOrders->sum(function ($productOrder) {
                return $productOrder->subtotal;
            });
            $order->totalAmount = $totalAmount;
        }

        return response()->json($orders);
    }
    
    public function shipments()
    {
        $title = "Carzex - shipments";
        $orders = Order::all();

        // Fetch all orders with related product orders
        // $orders = Order::with('productOrders')->get();

        // Calculate total amount for each order
        foreach ($orders as $order) {
            $totalAmount = $order->productOrders->sum(function ($productOrder) {
                return $productOrder->subtotal;
            });
            $orders->totalAmount = $totalAmount;
        }

        // Return the view with the homepage data
        return view('admin.order.shipments', [
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
    public function edit_shipments($id)
    {
        $title = "Carzex - Edit Order";
        $orders = Order::with('productOrders')->find($id);

        if (!$orders) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        return view('admin.order.edit_shipment', compact('title', 'orders'));
    }

    public function edit_order($id)
    {
        $title = "Carzex - Edit Order";
        $edit_order = Order::with('productOrders.product')->find($id);
        // $products = Product::all();  // Fetch all products or specific ones based on your requirements
        return view('admin.order.edit_order', compact('edit_order', 'title'));
    }
}
