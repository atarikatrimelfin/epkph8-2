<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Data;

class NavController extends Controller
{
    public function home()
    {
        return view('home', ['key'=>'home']);
    }

    public function rekapdata()
    {
        return view('rekapdata', ['key'=>'rekapdata']);
    }
    
}
