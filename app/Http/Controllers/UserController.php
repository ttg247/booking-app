<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    // Show the form for creating a new user
    public function create()
    {
        $users = User::all(); // Get all users
        return view('users.create', compact('users'));
    }

    // Store a newly created user in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'notes' => 'nullable|string',
        ]);

        // Create a new user
        user::create($validatedData);
        

        // Redirect back with a success message
        return redirect()->route('users.index')->with('success', 'user created successfully.');
    }

    // List all users
    public function index()
    {
        $users = user::with('user')->get();
        return view('users.index', compact('users'));
    }

    // Show details of a single user
    public function show($id)
    {
        $user = user::with('user')->findOrFail($id);
        return view('users.show', compact('user'));
    }

    // Show details of a single user
    public function hasRole($role)
    {
        $user = user::with('user')->findOrFail($id);
        if ($user->role === 'owner') {
            // Logic for owners
            return true;
        }
        return false;
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            // Login successful, redirect to dashboard
            return redirect()->route('home');
        } else {
            // Login failed, redirect back with error message
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function login(Request $request)
    {

        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            // Login successful, redirect to dashboard
            return redirect()->route('home');
        } else {
            // Login failed, redirect back with error message
            return back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
    // Add other methods like edit, update, and destroy as needed
}
