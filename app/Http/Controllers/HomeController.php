<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;

        if($role=='0')
        {
            return view('superadmin');
        }

        if($role=='1')
        {
            return view('kontributor');
        }

        if($role=='2')
        {
            return view('creator');
        }

        if($role=='4')
        {
            return view('user');
        }

        else
        {
            return view('dashboard'); 
        }

        
    }
}
