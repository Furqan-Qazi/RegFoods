<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

       public function coupon_form(){
             return view('admin.coupon-form');
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
    $request->validate([
        'code'         => 'required|string|max:50|unique:coupons,code',
        'type'         => 'required|in:fixed,percentage',
        'value'        => 'required|numeric|min:0',
        'expiry_date'  => 'required|date|after_or_equal:today',
        'is_active'    => 'required|boolean',
    ]);

    // try {
        Coupon::create([
            'code'        => $request->code,
            'type'        => $request->type,
            'value'       => $request->value,
            'expiry_date' => $request->expiry_date,
            'is_active'   => $request->is_active,
        ]);
        return redirect()->back()->with('success', 'Coupon created successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Coupon $coupon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coupon $coupon)
    {
        //
    }
}
