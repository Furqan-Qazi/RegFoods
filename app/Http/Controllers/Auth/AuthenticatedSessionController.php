<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Validate and authenticate the user
        $request->authenticate();

        // Regenerate session for security
        $request->session()->regenerate();

        // Get the logged-in user
        $user = Auth::user();

        // Redirect based on role_id
        if ($user->role_id == 1) {
            return redirect()->route('admin.dashboard'); // admin
        } elseif ($user->role_id == 2) {
            return redirect()->route('blog_page_show'); // user
        } else {
            return redirect()->route('home'); // fallback
        }
    }

    /**
     * Logout the user and destroy session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
