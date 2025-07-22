<?php
namespace App\Http\Controllers;

use App\Models\BillingAddresse;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Checkout\Session as StripeSession;
class StripePaymentController extends Controller
{



public function createCheckoutSession()
{
    Stripe::setApiKey(config('services.stripe.secret'));

    $amount = array_sum(session('totals', [])) * 100;

    $session = StripeSession::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                    'name' => 'Total Cart Payment',
                ],
                'unit_amount' => $amount,
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => route('payment.success'),
        'cancel_url' => route('payment.cancel'),
    ]);

    return redirect($session->url);
}



    
 public function paymentPage()
    {
        return view('payment', [
            'billing' => session('billing'),
            'items' => session('items'),
            'images' => session('images'),
            'prices' => session('prices'),
            'quantities' => session('quantities'),
            'totals' => session('totals'),
        ]);
    }

 public function stripePost(Request $request)
{
    Stripe::setApiKey(config('services.stripe.secret'));

    $amount = array_sum(session('totals', [])) * 100;

    $charge = Charge::create([
        "amount" => $amount,
        "currency" => "usd",
        "source" => $request->stripeToken,
        "description" => "Laravel Stripe Payment",
    ]);

    $billing = session('billing');

    Payment::create([
        'first_name' => $billing['first_name'] ?? null,
        'last_name' => $billing['last_name'] ?? null,
        'company' => $billing['company'] ?? null,
        'street_address' => $billing['street_address'] ?? null,
        'apartment' => $billing['apartment'] ?? null,
        'city' => $billing['city'] ?? null,
        'state' => $billing['state'] ?? null,
        'zip' => $billing['zip'] ?? null,
        'country' => $billing['country'] ?? null,
        'phone' => $billing['phone'] ?? null,
        'email' => $billing['email'] ?? null,
        'cart_items' => json_encode(session('items')),
        'amount' => $amount / 100,
        'stripe_charge_id' => $charge->id,
    ]);

    Session::forget(['items', 'images', 'prices', 'quantities', 'totals', 'billing']);

    return redirect()->route('payment.page')->with('success', 'Payment successful & saved!');
}




public function paymentSuccess()
{
    // Abort if session data missing
    if (!session()->has('totals')) {
        return redirect()->route('payment.page')->with('error', 'Session expired. Please try again.');
    }

    $billing = session('billing');
    $items = session('items');
    $quantities = session('quantities');
    $prices = session('prices');
    $totals = session('totals');
    $user_id = auth()->id();
    $total_amount = array_sum($totals);

    // Save billing address
    $billingAddress = new BillingAddresse();
    $billingAddress->user_id = $user_id;
    $billingAddress->first_name = $billing['first_name'];
    $billingAddress->last_name = $billing['last_name'];
    $billingAddress->company_name = $billing['company'] ?? null;
    $billingAddress->street_address = $billing['street_address'];
    $billingAddress->apartment_suite = $billing['apartment'] ?? null;
    $billingAddress->city = $billing['city'];
    $billingAddress->state = $billing['state'];
    $billingAddress->zip = $billing['zip'];
    $billingAddress->phone = $billing['phone'];
    $billingAddress->email = $billing['email'];
    $billingAddress->additional_info = $billing['notes'] ?? null;
    $billingAddress->save();

    // Save order
    $order = new Order();
    
    $user_id = Auth::check() ? Auth::id() : null;

    $order->user_id = $user_id;
    $order->total_amount = $total_amount;
    $order->status = 'Completed';
    $order->save();

    // Save order items
    foreach ($items as $index => $itemName) {
        $orderItem = new OrderItem();
        $orderItem->order_id = $order->order_id;

        $orderItem->item_id = $index + 1; 
        $orderItem->quantity = $quantities[$index];
        $orderItem->price = $prices[$index];
        $orderItem->save();
    }

    // Save payment details
    $paymentDetail = new Payment();
    $paymentDetail->order_id = $order->order_id;

    $paymentDetail->card_holder_name = $billing['first_name'] . ' ' . $billing['last_name'];
    $paymentDetail->card_number = '**** **** **** 4242';
    $paymentDetail->country = $billing['country'];
    $paymentDetail->payment_method = 'Stripe';
    $paymentDetail->payment_status = 'paid';
    $paymentDetail->save();

    //  Store order_id in session
    session(['order_id' => $order->id]);

    // Clear all other session data
    Session::forget(['items', 'images', 'prices', 'quantities', 'totals', 'billing']);
    return redirect()->route('thankyou.page');
}


}
