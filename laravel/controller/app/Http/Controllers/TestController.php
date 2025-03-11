<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function json()
    {
        return response()->json([
            'name' => 'John Doe',
            'age' => 24
        ]);
    }

    public function download()
    {
        $file = storage_path('sample.pdf');
        return response()->download($file);
    }

    public function file()
    {
        $file = storage_path('sample.pdf');
        return response()->file($file);
    }

    public function redirect()
    {
        return redirect()->route('file');
    }

    public function away()
    {
        return redirect()->away('https://www.google.com');
    }
}
