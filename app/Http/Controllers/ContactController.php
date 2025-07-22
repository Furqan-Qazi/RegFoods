<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function contactus(){
          return view('contact');
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
            'name' => 'required|string|max:255',
            'email' => Auth::check() ? 'nullable' : 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);

        Contact::create([
            'user_id' => Auth::check() ? Auth::id() : null,
            'name'    => Auth::check() ? Auth::user()->name : $request->name,
            'email'   => Auth::check() ? Auth::user()->email : $request->email,
            'phone' => $request->phone,
            'subject' =>  $request->subject,
            'message' =>  $request->message,
        ]);

        return redirect()->back()->with('success', 'Contact meassage submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
