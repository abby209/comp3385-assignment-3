<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::all(); // Get all clients
        return view('dashboard', compact('clients')); // Pass clients to view
    }
}
