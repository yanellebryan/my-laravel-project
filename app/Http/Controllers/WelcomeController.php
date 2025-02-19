<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // This method will return the main 'welcome' view
    public function index() {
        return view('welcome');
    }

    // This method should show the greeting page, return a view instead of echoing text
    public function showGreeting() {
        echo "Show greeting page";
    }

    // Redirect to the route named 'greeting'
    public function redirectGreeting() {
        return redirect()->route('hello'); // Ensure 'greeting' route exists
    }
    // Other methods can be added here
}
