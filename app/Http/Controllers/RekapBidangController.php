<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapBidangController extends Controller
{
    public function rekapbidang() 
    {
        return view('rekapbidang', ['key'=>'rekapbidang']);
    }
}
