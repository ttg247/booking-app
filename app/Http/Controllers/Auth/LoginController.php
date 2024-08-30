<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only(['email', 'password']);
    if (Auth::attempt($credentials)) {
        // Redirect to dashboard based on user role
        $user = Auth::user();
        switch ($user->role) {
            case 'owner':
                return redirect()->route('owner-dashboard');
            case 'staff':
                return redirect()->route('staff-dashboard');
            case 'customer':
                return redirect()->route('customer-dashboard');
        }
    }
    return back()->withErrors(['email' => 'Invalid credentials']);
}

}
