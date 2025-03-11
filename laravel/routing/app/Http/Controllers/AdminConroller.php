<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminConroller extends Controller
{
    public function dashboard()
    {
        return 'admin dashboard';
    }

    public function users() 
    {
        return 'manage users';
    }

    public function settings() 
    {
        return 'system settings';
    }
}
