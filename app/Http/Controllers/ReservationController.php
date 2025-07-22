<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    if (Auth::check()) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'number_of_people' => 'required|integer',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
        ]);

        Reservation::create([
            'user_id' => Auth::id(),
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'phone' => $request->phone,
            'number_of_people' => $request->number_of_people,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
        ]);

    } else {
        // Guest
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'number_of_people' => 'required|integer',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
        ]);

        Reservation::create([
            'user_id' => null,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'number_of_people' => $request->number_of_people,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time, 
        ]);
    }

    return redirect()->back()->with('success', 'Reservation booked successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
         //    

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
