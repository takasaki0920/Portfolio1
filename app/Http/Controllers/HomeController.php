<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('home');
    }

    public function profile()
    {
        
        return view('profile');
    }
    public function skill()
    {
        
        return view('skill');
    }
    public function detail()
    {
        
        return view('detail');
    }

}
