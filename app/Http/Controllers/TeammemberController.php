<?php

namespace App\Http\Controllers;

use App\Models\Teammember;
use Illuminate\Http\Request;

class TeammemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function chefs_page(){
         $teamMembers = Teammember::all();
         return view('chefs',compact('teamMembers'));
    }
    
   public function teammember_form_show(){
             return view('admin.teammember-form');
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
            'name'        => 'required|string|max:255',
            'designation' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/team_members'), $imageName);
        }

        Teammember::create([
            'name'        => $request->name,
            'designation' => $request->designation,
            'image'       => $imageName,
        ]);

        return redirect()->back()->with('success', 'Team member added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teammember $teammember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teammember $teammember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teammember $teammember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teammember $teammember)
    {
        //
    }
}
