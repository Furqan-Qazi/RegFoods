<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; 


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


public function showCart()
{
    $cart = session()->get('cart', []);
    $items = [];

    foreach ($cart as $id => $cartItem) {
        $items[] = (object)[
            'id' => $id,
            'name' => $cartItem['name'],
            'price' => $cartItem['price'],
            'image' => $cartItem['image'],
            'quantity' => $cartItem['quantity'],
        ];
    }

    return view('cart_view', compact('items'));
}


   public function checkoutStore(Request $request)
{
    $items = [];

    if (!empty($request->items)) {
        foreach ($request->items as $index => $item) {
            $qty = $request->quantities[$index] ?? 0;

            if ($qty > 0) {
                $items[] = [
                    'name' => $item,
                    'image' => $request->images[$index] ?? '',
                    'price' => $request->prices[$index] ?? 0,
                    'quantity' => $qty,
                    'total' => $request->totals[$index] ?? 0,
                ];
            }
        }
    }

    session(['checkout_items' => $items]);

    return redirect()->route('checkout.page');
}


public function checkoutPage()
{
    $items = session('checkout_items', []);
    return view('check_out', compact('items'));
}

public function addToCart(Request $request)
{
    $cart = session()->get('cart', []);

    $id = $request->item_id;
    $cart[$id] = [
        'id' => $id,
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => ($cart[$id]['quantity'] ?? 0) + $request->quantity,
        'image' => $request->image,
    ];

    session(['cart' => $cart]);

    return response()->json([
        'status' => 'success',
        'cart_count' => array_sum(array_column($cart, 'quantity')) 
    ]);
}


public function removeItem(Request $request)
{
    $cart = session()->get('cart', []);
    $name = $request->input('name');

    foreach ($cart as $index => $item) {
        if ($item['name'] === $name) {
            unset($cart[$index]);
            break;
        }
    }

    session()->put('cart', $cart);
    return response()->json(['success' => true]);
}

public function clearCart()
{
    Log::debug('Clear Cart Called!');
    session()->forget('cart');
    return response()->json(['success' => true]);
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
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }

}
