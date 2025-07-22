<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Feedback;
use App\Models\Item;
use App\Models\Teammember;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function home()
{
    $feedbacks = Feedback::latest()->take(6)->get();
    $categories = Categorie::with('items')->get();
    $teamMembers = Teammember::all();
    $blogs = Blog::with(['user', 'item.category'])->latest()->take(4)->get();
   $testimonials = Testimonial::latest()->take(3)->get(); // <- yeh line add karein
    return view('welcome', compact('feedbacks', 'categories', 'teamMembers', 'blogs','testimonials'));
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
        //
    }
}
