<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

public function menu(Request $request)
{
    $query = $request->input('query');
    $sort = $request->input('sort');

    $categories = Categorie::with('items')->get();

    $blogs = Blog::with(['user', 'item.category']);

    // Search Logic
    if ($query) {
        $blogs->whereHas('item', function ($q) use ($query) {
            $q->where('name', 'like', '%' . $query . '%');
        });
    }

    // Sorting Logic
    if ($sort == 'latest') {
        $blogs->latest();
    } elseif ($sort == 'low_high') {
        $blogs->join('items', 'blogs.item_id', '=', 'items.item_id')
              ->orderBy('items.price', 'asc')
              ->select('blogs.*');
    } elseif ($sort == 'high_low') {
        $blogs->join('items', 'blogs.item_id', '=', 'items.item_id')
              ->orderBy('items.price', 'desc')
              ->select('blogs.*');
    }

    $blogs = $blogs->take(8)->get();

    return view('menu', compact('categories', 'blogs'));
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
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
