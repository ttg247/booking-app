<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

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
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        // Create a new service
        Service::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    // List all services
    public function index()
    {
        $services = Service::all();
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
