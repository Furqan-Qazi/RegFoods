<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function index(Request $request)
{
    $query = Blog::with(['user', 'item']);

    // Apply all filters in one query group
    $query->where(function ($q) use ($request) {
        if ($request->filled('search')) {
            $search = $request->search;

            $q->where('title', 'like', "%$search%")
              ->orWhere('slug', 'like', "%$search%")
              ->orWhere('content', 'like', "%$search%")
              ->orWhereHas('user', function ($uq) use ($search) {
                  $uq->where('name', 'like', "%$search%");
              })
              ->orWhereHas('item', function ($iq) use ($search) {
                  $iq->where('name', 'like', "%$search%");
              });
        }

        if ($request->filled('date')) {
            $q->whereDate('created_at', $request->date);
        }
    });

    $blogs = $query->orderBy('blog_id', 'desc')->get();

    return view('admin.blogs.all_blogs', compact('blogs'));
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
    $blog = Blog::findOrFail($id);
    return view('admin.blogs.edit_blogs', compact('blog'));
}

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, string $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ]);

    $blog = Blog::findOrFail($id);
    $blog->title = $request->title;
    $blog->slug = $request->slug;
    $blog->content = $request->content;

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/blogs'), $filename);
        $blog->image = $filename;
    }

    $blog->save();

    return redirect()->route('admin.blogs.edit', $id)->with('success', 'Blog updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $blog = Blog::findOrFail($id);
    
    if ($blog->image && file_exists(public_path('uploads/blogs/' . $blog->image))) {
        unlink(public_path('uploads/blogs/' . $blog->image));
    }

    $blog->delete();

    return redirect()->back()->with('success', 'Blog deleted successfully!');
}

}
