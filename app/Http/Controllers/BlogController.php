<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Feedback;
use App\Models\Item;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function blogs(){
    $blogs = Blog::with(['user', 'item.category'])->latest()->take(6)->get();
    return view('blogs', compact('blogs'));
    }
 
   public function show_blog_details($slug)
{
    $blog = Blog::with(['user', 'item.category'])->where('slug', $slug)->firstOrFail();
    $feedbacks = Feedback::latest()->take(6)->get();
    return view('blog_details', compact('blog', 'feedbacks'));
}
    
public function blog_form_show(){
    $items = Item::all(); // saari categories/items
    return view('admin.blog-form', compact('items'));
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
        'title'    => 'required|string|max:255',
        'content'  => 'required|string',
        'user_id'  => 'required|integer|exists:users,user_id',
        'item_id'  => 'required|integer|exists:items,item_id',
         'image'    => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
    ]);

    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('uploads/blogs'), $imageName);

    Blog::create([
        'user_id'  => $request->user_id,
        'item_id'  => $request->item_id,
        'title'    => $request->title,
        'slug'     => Str::slug($request->title),
        'content'  => $request->content,
        'image'    =>$imageName,
    ]);

    return redirect()->back()->with('success', 'Blog published successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
