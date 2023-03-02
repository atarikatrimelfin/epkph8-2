<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Data;

class NavController extends Controller
{
    public function dashboard()
    {
        return view('layouts.dashboard', ['key'=>'dashboard']);
    }    
}
