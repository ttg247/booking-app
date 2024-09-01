<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BusinessController extends Controller
{
    /**
     * Display a listing of the businesses.
     */
    public function index()
    {
        $businesses = Business::all();
        return view('businesses.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new business.
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Store a newly created business in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
            'description' => 'nullable|string|max:255',
            'owner_id' => 'nullable|string|max:255',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Check if the user already has a business
        if ($user->business_id) {
            return redirect()->back()->with('error', 'A business is already associated with your account.');
        }

        $business = Business::create([
            'owner_id' => auth()->id(),
            'name' => $validated['name'],
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'email' => $validated['email'],
            'description' => $validated['description'],
        ]);

         // Assign the newly created business ID to the user's business_id
         $user->business_id = $business->id;
         $user->save();
         
        return redirect()->route('businesses.index')->with('success', 'Business created successfully.');
    }

    /**
     * Display the specified business.
     */
    public function show(Business $business)
    {
        return view('businesses.show', compact('business'));
    }

    /**
     * Show the form for editing the specified business.
     */
    public function edit(Business $business)
    {
        return view('businesses.edit', compact('business'));
    }

    /**
     * Update the specified business in storage.
     */
    public function update(Request $request, Business $business)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|email|max:255',
        ]);

        $business->update($validated);

        return redirect()->route('businesses.index')->with('success', 'Business updated successfully.');
    }

    /**
     * Remove the specified business from storage.
     */
    public function destroy(Business $business)
    {
        $business->delete();

        return redirect()->route('businesses.index')->with('success', 'Business deleted successfully.');
    }

}
