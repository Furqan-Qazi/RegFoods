<?php

namespace App\Http\Controllers;

use App\Models\BillingAddresse;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class BillingAddresseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
public function checkout_page_show(Request $request)
{

    if ($request->has('items')) {
        session(['checkout_items' => $request->items]);
    }

    return view('check_out');
}
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
public function store(Request $request)
{
    $validated = $request->validate([
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'email' => 'required|email',
        'street_address' => 'required|string',
        'additional_info' => 'nullable|string',
    ]);
    session(['billing_data' => $validated]);

    if ($request->has('items')) {
        session(['checkout_items' => $request->items]);
    }

    return redirect()->route('payment');
}

    /**
     * Display the specified resource.
     */
    public function show(BillingAddresse $billingAddresse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BillingAddresse $billingAddresse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BillingAddresse $billingAddresse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BillingAddresse $billingAddresse)
    {
        //
    }
}
