<?php

namespace App\Http\Controllers;

use App\Models\Cart\Cart;
use App\Models\Order\Order;
use App\Models\Product\Product;
use App\Models\ProductOrder\ProductOrder;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function add_to_cart($id)
    {
        // Check if the customer is authenticated
        if (Auth::guard('customer')->check()) {
            $customerId = Auth::guard('customer')->user()->id;

            // Check if the product already exists in the cart for the customer
            $existingCartItem = Cart::where('customer_id', $customerId)
                ->where('product_id', $id)
                ->first();

            // If the product exists, update its quantity or any other fields you need
            if ($existingCartItem) {
                // For example, you can update quantity here
                // $existingCartItem->quantity += 1;
                // $existingCartItem->save();
            } else {
                // If the product doesn't exist, create a new cart item
                $cart = new Cart();
                $cart->customer_id = $customerId;
                $cart->product_id = $id;
                $cart->save();
            }

            // Fetch all cart items for the customer
            $cartList = Cart::where('customer_id', $customerId)->get();

            // Assuming $title is defined somewhere
            $title = "Your Cart";

            return view('front.cart.index', ['title' => $title, 'products' => $cartList]);
        } else {
            return redirect()->route('myaccount');
        }
    }
    public function cart()
    {
        $title = "Carzex - Cart";

        // Check if session is active and has customer id
        if (Auth::guard('customer')->check() && Auth::guard('customer')->id()) {
            $customerId = Auth::guard('customer')->id();
            $cartList = Cart::where('customer_id', $customerId)->get();
        } else {
            // If session is not active or does not have customer id
            return redirect()->route('myaccount');
        }

        return view('front.cart.index', ['title' => $title, 'products' => $cartList]);
    }

    public function checkout()
    {
        $title = "Carzex - Checkout";

        // Retrieve cart items from session
        $cartItems = session('cart', []);

        // Check if cart items exist and are in the correct format
        if (!is_array($cartItems) || empty($cartItems)) {
            // Handle error, e.g., redirect back with an error message
            return redirect()->back()->with('error', 'Cart is empty or not in the correct format.');
        }

        // Fetch product names based on product IDs
        $productNames = [];  // Initialize an empty array to store product names
        foreach ($cartItems as $item) {
            $product = Product::find($item['productId']);  // Assuming Product is your model name
            if ($product) {
                $productNames[$item['productId']] = $product->name;
            } else {
                $productNames[$item['productId']] = 'Unknown Product';
            }
        }

        // Calculate subtotal and total
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item['subtotal'];
        }

        // You can add shipping or other costs here
        $shipping = 0; // Assuming free shipping for this example
        $total = $subtotal + $shipping;

        // Return the view with cart data and product names
        return view('front.payment.index', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'total' => $total,
            'shipping' => $shipping,
            'productNames' => $productNames
        ]);
    }





    public function processPayment(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'laststName' => 'required|string|max:255',
            'companyName' => 'nullable|string|max:255',
            'billing_country' => 'required|string|max:255',
            'streetAdress' => 'required|string|max:255',
            'streetAdress2' => 'nullable|string|max:255',
            'townCity' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pinCode' => 'required|string|max:10',
            'phone' => 'required|string|max:15',
            'emailAdress' => 'required|email|max:255',
            'accountUsername' => 'required|string|max:255',
            'orderNotes' => 'nullable|string',
            'is_paid' => 'nullable|string',
        ]);

        $cartItems = session('cart');
        $customerId = Auth::guard('customer')->user()->id;

        // Create an order
        $order = new Order();
        $order->customer_id = $customerId;
        $order->first_name = $validatedData['firstName'];
        $order->last_name = $validatedData['laststName'];
        $order->company_name = $validatedData['companyName'];
        $order->country = $validatedData['billing_country'];
        $order->street_address = $validatedData['streetAdress'];
        $order->street_address2 = $validatedData['streetAdress2'];
        $order->town_city = $validatedData['townCity'];
        $order->state = $validatedData['state'];
        $order->pin_code = $validatedData['pinCode'];
        $order->phone = $validatedData['phone'];
        $order->email = $validatedData['emailAdress'];
        $order->account_username = $validatedData['accountUsername'];
        $order->order_notes = $validatedData['orderNotes'];
        $order->is_paid = $validatedData['is_paid'];  // Assuming payment is processed successfully
        // $order->is_paid = true;
        $order->save();

        // Save product order details
        foreach ($cartItems as $item) {
            $productOrder = new ProductOrder();
            $productOrder->order_id = $order->id;
            $productOrder->product_id = $item['productId'];
            $productOrder->quantity = $item['quantity'];
            $productOrder->subtotal = $item['subtotal'];
            $productOrder->save();

            // Remove product from cart database
            Cart::where('customer_id', $customerId)
                ->where('product_id', $item['productId'])
                ->delete();
        }

        // Clear cart session
        $request->session()->forget('cart');
        session(['cartCount' => 0]);

        // Redirect or return response
        return redirect()->route('thankyou')->with('success', 'Payment successful');
    }


    public function thankyou()
    {
        $title = "Carzex - Thank you";
        $customerId = Auth::guard('customer')->user()->id;

        // Fetch orders for the logged-in customer
        $orders = Order::with('productOrders.product')->where('customer_id', $customerId)->orderBy('created_at', 'desc')->get();

        return view('front.thankyou', ['title' => $title, 'orders' => $orders]);
    }
    public function store(Request $request)
    {
        // Validate and create the order...
        $order = Order::create($request->all());

        // Send the confirmation email to the user and the owner
        $ownerEmail = 'mddanish2320@gmail.com'; // Replace with the owner's email
        Mail::to($request->user())
            ->cc($ownerEmail)
            ->send(new OrderShipped($order));

        // Redirect or return response...
    }
    public function removeCartItem($id)
    {

        $cartItem = Cart::findOrFail($id);

        $cartItem->delete();

        return redirect()->back();
    }
}
