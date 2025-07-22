<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


  public function testimonial_page_show(){
       $testimonials = Testimonial::orderBy('created_at', 'desc')->take(6)->get();
    return view('testimonial', compact('testimonials'));
   }
   
public function about_page_show()
{
    $latestTestimonial = Testimonial::latest()->first();
    return view('about', compact('latestTestimonial'));
}

  public function testimonial_form_show(){
     return view('admin.testimonial-form');
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
            'message' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/testimonial'), $imageName);
        }

        Testimonial::create([
            'name'        => $request->name,
            'message' => $request->message,
            'image'       => $imageName,
        ]);

        return redirect()->back()->with('success', 'Testimonial added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
