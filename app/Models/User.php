<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Import the Request class

class UserController extends Controller
{
    public function submitForm(Request $request) {
        $request->validate([
            'name' => 'required|string|max:225', // Added missing comma
            'email' => 'required|email|unique:users', // Added missing comma
        ]);

        // Add your logic to handle the request here (e.g., saving data)
    }
};
