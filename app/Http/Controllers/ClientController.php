<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Store a newly created client in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function create()
    {
        return view('clients.create');
    }
    
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'phone' => 'required|string|regex:/^\d{3}-\d{3}-\d{4}$/',
            'address' => 'required|string|max:255',
            'company_logo' => 'required|image|max:2048', // Max file size: 2MB (2048 KB)
        ]);

        // Handle file upload
        if ($request->hasFile('company_logo')) {
            $file = $request->file('company_logo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/logos', $filename);
            $validatedData['company_logo'] = $filename;
        }

        // Create a new client
        $clients = Client::create($validatedData);

        // Redirect with flash message
        return redirect('/dashboard')->with('success', 'Client added successfully');
    }
}
