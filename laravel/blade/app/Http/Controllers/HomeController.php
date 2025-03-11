<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        $script = '<script>alert("javascript executed")</script>';
        $type = 'corporate';
        $fruits = ['apple', 'banana', 'orange'];
        $currentFruit = 'orange';
        $error = 'Requried input';
        return view('welcome', [
            'name' => 'John Doe', 
            'script' => $script, 
            'type' => $type, 
            'fruits' => $fruits,
            'error' => $error,
            'currentFruit' => $currentFruit
        ]);
    }
}
