<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\ProductOrder\ProductOrder;
use Illuminate\Http\Request;
use App\Models\CartDetail;
use App\Models\Customer\Customer;
use App\Models\Product\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    public function incomplete_orders(Request $request)
    {
        $title = "Carzex - Incomplete orders";


        // Return the view with the homepage data
        return view('admin.order.incomplete_orders', [
            'title' => $title
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
        // $orders = productOrders::all();

        // Fetch all orders with related product orders
        $orders = Order::with('productOrders')->get();
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
        // $order = ProductOrder::with('product', 'order')->find($id);
        $order = Order::with('productOrders.product')->find($id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        return view('admin.order.edit_shipment', compact('title', 'order'));
    }

    public function edit_order($id)
    {
        $title = "Carzex - Edit Order";
        $edit_order = Order::with('productOrders.product')->find($id);
        // $products = Product::all();  // Fetch all products or specific ones based on your requirements
        return view('admin.order.edit_order', compact('edit_order', 'title'));
    }
    public function incompleteOrders()
    {
        $cartItems = CartDetail::all();
        $orders = Order::all();

        // Retrieve unique customer IDs from cart items and orders
        $cartCustomerIds = $cartItems->pluck('customer_id')->unique();
        $orderCustomerIds = $orders->pluck('customer_id')->unique();

        // Retrieve unique product IDs from cart items and orders
        $cartProductIds = $cartItems->pluck('product_id')->unique();
        $orderProductIds = $orders->pluck('product_id')->unique();

        // Check if there are customers in cart items not present in orders
        $missingCustomerIds = $cartCustomerIds->diff($orderCustomerIds);

        // Check if there are products in cart items not present in orders
        $missingProductIds = $cartProductIds->diff($orderProductIds);

        if ($missingCustomerIds->isNotEmpty() || $missingProductIds->isNotEmpty()) {
            // Get customers without loading the relationship initially
            $customers = Customer::whereIn('id', $missingCustomerIds)->get();
            $products = Product::whereIn('id', $missingProductIds)->get();
        } else {
            // If no missing customers or products, set customers and products to empty collections
            $customers = collect();
            $products = collect();
        }

        // Return the view with the required data
        return view('admin.order.incomplete_orders', compact('customers', 'products', 'cartItems'));
    }
    public function incomplete_show($id)
    {
        $customer = Customer::findOrFail($id);
        $cartItems = CartDetail::where('customer_id', $id)->get();
        $products = Product::whereIn('id', $cartItems->pluck('product_id'))->get();

        return view('admin.order.incomplete_show', compact('customer', 'cartItems', 'products'));
    }
}
