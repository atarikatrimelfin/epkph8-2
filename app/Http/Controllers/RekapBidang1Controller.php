<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekapBidang1Controller extends Controller 
{
    public function rekapbidang1() 
    {
        return view('rekapbidang1', ['key'=>'rekapbidang1']);
    }
}
