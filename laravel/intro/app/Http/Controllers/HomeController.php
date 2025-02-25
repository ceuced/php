<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        $fullName = 'Joey Chua';
        return view('home.about', [
            'name' => $fullName, 
            'course' => 'BSIT'
        ]);
    }
}
