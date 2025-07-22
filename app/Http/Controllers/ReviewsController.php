<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function review_menu_detail()
{
    $reviews = Reviews::latest()->get();    
    $categories = Categorie::with('items')->get();

    return view('menu_details', compact('reviews', 'categories'));
}

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
        $request->validate([
            'name'   => 'required|string|max:255',
            'comment'=> 'required|string|min:2',
            'email'  => Auth::check() ? '' : 'required|email',
        ]);

        Reviews::create([
            'user_id' => Auth::check() ? Auth::id() : null,
            'name'    => Auth::check() ? Auth::user()->name : $request->name,
            'email'   => Auth::check() ? Auth::user()->email : $request->email,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Review submitted successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews)
    {
        //
    }
}
