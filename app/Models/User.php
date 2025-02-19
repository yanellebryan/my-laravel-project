<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    public function submitForm(Request $request) {
        $request->validate ([
            'name' => 'required|string|max:225'
            'email' => 'required|email|unique:users'
        ]);

        
    }
};