<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
{
    $query = Categorie::query();

    if ($request->filled('search')) {
        $searchTerm = $request->search;

        $query->where(function ($q) use ($searchTerm) {
            $q->where('name', 'like', '%' . $searchTerm . '%')
              ->orWhere('category_id', 'like', '%' . $searchTerm . '%');
        });
    }

    if ($request->filled('date')) {
        $query->whereDate('created_at', $request->date);
    }

    $categories = $query->orderBy('category_id', 'desc')->get();

    return view('admin.category.all_category', compact('categories'));
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
  
public function edit($id)
{
    $category = Categorie::findOrFail($id);
    return view('admin.category.edit_category', compact('category'));
}

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $category = Categorie::findOrFail($id);
    $category->name = $request->name;
    $category->save();

    return redirect()->route('admin.all_category')->with('success', 'Category updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $category = Categorie::findOrFail($id);
    $category->delete();

    return redirect()->back()->with('success', 'Category deleted successfully!');
}
}
