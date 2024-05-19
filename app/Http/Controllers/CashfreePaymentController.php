<?php

namespace App\Http\Controllers;
use App\Models\Order\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\ProductOrder\ProductOrder;
use App\Models\Cart\Cart;
use App\Models\Product\Product;
class CashfreePaymentController extends Controller
{
    public function create(Request $request)
    {
        return view('front.payment.payment-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'mobile' => 'required',
            'amount' => 'required'
        ]);

        $url = "https://sandbox.cashfree.com/pg/orders";

        $headers = array(
            "Content-Type: application/json",
            "x-api-version: 2022-01-01",
            "x-client-id: " . env('CASHFREE_API_KEY'),
            "x-client-secret: " . env('CASHFREE_API_SECRET')
        );

        $data = json_encode([
            'order_id' =>  'order_' . rand(1111111111, 9999999999),
            'order_amount' => $validated['amount'],
            "order_currency" => "INR",
            "customer_details" => [
                "customer_id" => 'customer_' . rand(111111111, 999999999),
                "customer_name" => $validated['name'],
                "customer_email" => $validated['email'],
                "customer_phone" => $validated['mobile'],
            ],
            "order_meta" => [
                "return_url" => 'http://127.0.0.1:8000/cashfree/payments/success/?order_id={order_id}&order_token={order_token}'
            ]
        ]);

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        $resp = curl_exec($curl);

        if ($resp === false) {
            // cURL error occurred
            $error = curl_error($curl);
            curl_close($curl);
            return back()->withInput()->withErrors(["cURL Error: $error"]);
        }

        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($httpCode !== 200) {
            // Request failed
            curl_close($curl);
            return back()->withInput()->withErrors(["Request failed with HTTP code $httpCode"]);
        }

        curl_close($curl);

        // Parse response
        $responseData = json_decode($resp);

        if (!$responseData || !isset($responseData->payment_link)) {
            // Response data or payment link not found
            return back()->withInput()->withErrors("Failed to retrieve payment link");
        }

        return redirect()->to($responseData->payment_link);
    }


    public function success(Request $request)
{
    // Retrieve cart items from session
    $cartItems = session('cart');
    $requestData = $request->all();
if(isset($requestData)){
    // Retrieve authenticated customer's ID
    $customerId = Auth::guard('customer')->user()->id;

    // Calculate total amount
    $totalAmount = 0;
    foreach ($cartItems as $item) {
        $totalAmount += $item['subtotal'];
    }
    $latestOrder = Order::latest()->first();
    $latestOrderId = $latestOrder->id;
    
    // Save product order details
    foreach ($cartItems as $item) {
        $productOrder = new ProductOrder();
        $productOrder->order_id = $latestOrderId; // Use the latest order ID
        $productOrder->product_id = $item['productId'];
        $productOrder->quantity = $item['quantity'];
        $productOrder->subtotal = $item['subtotal'];
        $productOrder->payment_id = substr($requestData['order_id'], 6);
        $productOrder->order_token = $requestData['order_token']; // This line seems unnecessary
        $productOrder->save();

        // Remove product from cart database
        Cart::where('customer_id', $customerId)
            ->where('product_id', $item['productId'])
            ->delete();
    }

    // Clear cart session
    $request->session()->forget('cart');
    session(['cartCount' => 0]);

    // Redirect to the "thank you" page with success message
    return redirect()->route('thankyou')->with('success', 'Payment successful');
}

}
}
