<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

public function checkout(Request $request)
{
    $cart = [
        'items' => $request->input('items', []),
        'images' => $request->input('images', []),
        'prices' => $request->input('prices', []),
        'quantities' => $request->input('quantities', []),
        'totals' => $request->input('totals', []),
    ];

    session(['cart' => $cart]); // Complete cart in session
    return view('check_out', compact('cart'));
}

public function storeBillingSession(Request $request)
{
    // Billing Info
    session([
        'billing' => [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'company' => $request->company,
            'country' => $request->country,
            'street_address' => $request->street_address,
            'apartment' => $request->apartment,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'email' => $request->email,
            'notes' => $request->notes,
            'selected_address' => $request->selected_address
        ],
    ]);

    //  Save cart items also
    session([
        'items' => $request->input('items', []),
        'images' => $request->input('images', []),
        'prices' => $request->input('prices', []),
        'quantities' => $request->input('quantities', []),
        'totals' => $request->input('totals', []),
    ]);

    return response()->json(['success' => true]);
}


public function paymentPage()
{
    return view('payment', [
        'billing' => session('billing', []),
        'items' => session('items', []),
        'images' => session('images', []),
        'prices' => session('prices', []),
        'quantities' => session('quantities', []),
        'totals' => session('totals', []),
        'grandTotal' => array_sum(session('totals', []))
    ]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
