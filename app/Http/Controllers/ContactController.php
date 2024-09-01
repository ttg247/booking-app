<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    // Show the form for creating a new contact
    public function create()
    {
        $users = User::all(); // Get all users
        return view('contacts.create', compact('users'));
    }

    // Store a newly created contact in the database
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

        // Create a new contact
        Contact::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    // List all contacts
    public function index()
    {
        $user = Auth::user();

        if (!$user->business_id) {
            return redirect()->back()->with('error', 'You need to have a business associated with your account to view contacts.');
        }

        // Retrieve all contacts associated with the user's business
        $contacts = User::where('business_id', $user->business_id)->get();

        return view('contacts.index', compact('contacts'));
    }

    // Show details of a single contact
    public function show($id)
    {
        $contact = Contact::with('user')->findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    // Add other methods like edit, update, and destroy as needed
}
