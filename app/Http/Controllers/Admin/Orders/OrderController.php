<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function pendingOrders()
{
    $orders = Order::where('status', 'Pending')
                    ->with(['orderItems.item.category'])
                    ->orderBy('order_id', 'desc')
                    ->get();

    return view('admin.orders.pending_orders', compact('orders'));
}

public function completedOrders()
{
   $orders = Order::where('status', 'Completed')
    ->with(['orderItems.item.category', 'billingAddress']) 
    ->orderBy('order_id', 'desc') 
    ->get();

    return view('admin.orders.completed_orders', compact('orders'));
}



public function markAsCompleted($id)
{
    $order = Order::findOrFail($id);
    $order->status = 'Completed';
    $order->save();

    return back()->with('success', 'Order marked as completed.');
}

public function index(Request $request)
{
    $query = Order::with('user')
        ->where('status', 'Pending'); 

    if ($request->filled('search')) {
        $search = $request->search;

        $query->where(function ($q) use ($search) {
            $q->where('order_id', 'like', "%$search%")
              ->orWhere('user_id', 'like', "%$search%")
              ->orWhere('total_amount', 'like', "%$search%")
              ->orWhere('status', 'like', "%$search%")
              ->orWhereHas('user', function ($uq) use ($search) {
                  $uq->where('name', 'like', "%$search%");
              });
        });
    }

    if ($request->filled('date')) {
        $query->whereDate('created_at', $request->date);
    }

    $orders = $query->orderBy('created_at', 'desc')->get();

    return view('admin.orders.pending_orders', compact('orders'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
  public function destroy(string $id)
{
    $order = Order::findOrFail($id);
    $order->delete();

    return back()->with('success', 'Order deleted successfully.');
}

}
