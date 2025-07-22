<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
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
            'feedback' => 'required|string|min:2',
        ]);

        Feedback::create([
            'user_id' => Auth::id(),
            'name'    => Auth::user()->name,
            'email'   => Auth::user()->email,
            'feedback'=> $request->feedback,
        ]);

    } else {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'feedback'=> 'required|string|min:2',
        ]);

        Feedback::create([
            'user_id' => null,
            'name'    => $request->name,
            'email'   => $request->email,
            'feedback'=> $request->feedback,
        ]);
    }

    return redirect()->back()->with('success', 'Feedback submitted successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
