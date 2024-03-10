<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create() // GET /clients/add
    {
        return view('clients.create'); // Replace with your view name
    }

    public function store(Request $request) // POST /clients
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:clients',
            'telephone' => 'nullable|string',
            'address' => 'nullable|string',
            'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // File validation
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $client = Client::create($request->validated()); // Use validated data

        if ($request->hasFile('company_logo')) {
            // Handle file upload logic
            $fileName = time() . '.' . $request->company_logo->getClientOriginalExtension();
            $request->company_logo->storeAs('public/logos', $fileName); // Adjust storage path
            $client->company_logo = $fileName;
            $client->save();
        }

        return redirect('/clients')->with('success', 'Client created successfully!');
    }
}
