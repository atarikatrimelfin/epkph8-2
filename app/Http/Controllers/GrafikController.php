<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrafikController extends Controller
{
    public function grafik(Request $request) 
    {
        return view('grafik', ['key'=>'grafik']);
    }
}
