<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    // Show the form for creating a new service
    public function create()
    {
        return view('services.create');
    }

    // Store a newly created service in the database
   
    public function store(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the user has a business
        if (!$user->business_id) {
            return redirect()->back()->with('error', 'You need to have a business associated with your account to add a service.');
        }

        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'price' => 'required|numeric|min:0',
            // Add any other fields you need for the service
        ]);

        // Create the new service and link it to the user's business
        $service = Service::create([
            'business_id' => $user->business_id,
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            // Add any other fields you need for the service
        ]);

        // Redirect with a success message
        return redirect()->route('services')->with('success', 'Service created successfully and linked to your business.');
    }

    // List all services
    public function index()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Check if the user has a business
        if (!$user->business_id) {
            return redirect()->back()->with('error', 'You need to have a business associated with your account to view services.');
        }

        // Retrieve all services associated with the user's business
        $services = Service::where('business_id', $user->business_id)->get();    

        // Pass the services to the view
        return view('services.index', compact('services'));
    }

    // Show details of a single service
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('services.show', compact('service'));
    }

    // Add other methods like edit, update, and destroy as needed
}
