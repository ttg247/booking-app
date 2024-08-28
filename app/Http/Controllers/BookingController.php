<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Staff;

class BookingController extends Controller
{
    // Show the form for creating a new booking
    public function create()
    {
        $users = User::all(); // Get all users
        $staff = Staff::all(); // Get all staff members
        return view('bookings.create', compact('users', 'staff'));
    }

    // Store a newly created booking in the database
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'staff_id' => 'required|exists:staff,id',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        // Create a new booking
        Booking::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully.');
    }

    // List all bookings
    public function index()
    {
        $bookings = Booking::with(['user', 'staff'])->get();
        return view('bookings.index', compact('bookings'));
    }

    // Show details of a single booking
    public function show($id)
    {
        $booking = Booking::with(['user', 'staff'])->findOrFail($id);
        return view('bookings.show', compact('booking'));
    }

    // Add other methods like edit, update, and destroy as needed
}
