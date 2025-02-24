<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $home = Home::all();
        return view('pages/home'), compact('home'));
    }

    public function skills() {
        return view('skills');
    }

    public function gallery() {
        return view('gallery');
    }


    
}
