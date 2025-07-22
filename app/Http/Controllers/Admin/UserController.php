<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Categorie;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $totalUsers = User::count();
    $newOrdersCount = Order::where('status', 'Pending')->count(); 
    $completedOrdersCount = Order::where('status', 'Completed')->count();
    $allblogs = Blog::count();
    $allcategory = Categorie::count();

    // return view('admin.dashboard', compact('totalUsers', 'newOrdersCount','completedOrdersCount','allblogs','allcategory'));
   return view('admin.dashboard', [
            'newOrdersCount' => $newOrdersCount,
            'completedOrdersCount' => $completedOrdersCount,
            'allcategory' => $allcategory,
            'totalUsers' => $totalUsers,
            'allblogs' => $allblogs
        ]);

}

public function all_user(Request $request)
{
    $query = User::query();

    if ($request->filled('search')) {
        $search = $request->search;

        $query->where(function ($q) use ($search) {
            $q->where('user_id', $search) 
              ->orWhere('name', 'like', "%$search%")
              ->orWhere('email', 'like', "%$search%");
        });
    }

    if ($request->filled('role_id')) {
        $query->where('role_id', $request->role_id);
    }

    if ($request->filled('date')) {
        $query->whereDate('created_at', $request->date);
    }

    $users = $query->orderBy('user_id', 'DESC')->get();
    $totalUsers = $users->count();

    return view('admin.users.all_users', compact('users', 'totalUsers'));
}

public function allBlogs()
{
    $blogs = Blog::latest()->get(); 
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
   public function edit_user($id)
   {
    $user = User::where('user_id', $id)->first();
    return view('admin.users.edit_user', compact('user'));
   }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'role_id' => 'required|integer',
    ]);

    User::where('user_id', $id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'role_id' => $request->role_id,
        'updated_at' => now(),
    ]);

    return redirect()->route('all_users')->with('success', 'User updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->back()->with('success', 'User deleted successfully!');
}

}
