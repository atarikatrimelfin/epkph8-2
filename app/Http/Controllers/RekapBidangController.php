<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RekapBidangController extends Controller
{
    public function rekapbidang(Request $request) 
    {
        if($request->has('search')){
            $datas1 = DB::select('SELECT
            SUM(poin11 + poin12 + poin13 + poin14 + poin15 + poin16 + poin17 + poin18) AS jum1,
    SUM(poin21 + poin22 + poin23 + poin24 + poin25 + poin26 + poin27 + poin28) AS jum2,
    SUM(poin31 + poin32 + poin33 + poin34 + poin35 + poin36 + poin37 + poin38) AS jum3,
    SUM(poin41 + poin42 + poin43 + poin44 + poin45 + poin46 + poin47 + poin48) AS jum4,
    
    SUM(poin11 + poin12 + poin13 + poin14 + poin15 + poin16 + poin17 + poin18 + 
    poin21 + poin22 + poin23 + poin24 + poin25 + poin26 + poin27 + poin28 + 
    poin31 + poin32 + poin33 + poin34 + poin35 + poin36 + poin37 + poin38 + 
    poin41 + poin42 + poin43 + poin44 + poin45 + poin46 + poin47 + poin48) AS total
        FROM
            `data_laporan`
        WHERE MONTH(data_laporan.tanggal) = :search
        GROUP BY MONTH(data_laporan.tanggal)
        ',
        ['search'=>$request->search] );
            
            
            return view('rekapbidang', ['key'=>'rekapbidang'])
            ->with('datas1', $datas1);
        }
    
        else {
            $datas1 = DB::select('SELECT
            SUM(poin11 + poin12 + poin13 + poin14 + poin15 + poin16 + poin17 + poin18) AS jum1,
    SUM(poin21 + poin22 + poin23 + poin24 + poin25 + poin26 + poin27 + poin28) AS jum2,
    SUM(poin31 + poin32 + poin33 + poin34 + poin35 + poin36 + poin37 + poin38) AS jum3,
    SUM(poin41 + poin42 + poin43 + poin44 + poin45 + poin46 + poin47 + poin48) AS jum4,
    
    SUM(poin11 + poin12 + poin13 + poin14 + poin15 + poin16 + poin17 + poin18 + 
    poin21 + poin22 + poin23 + poin24 + poin25 + poin26 + poin27 + poin28 + 
    poin31 + poin32 + poin33 + poin34 + poin35 + poin36 + poin37 + poin38 + 
    poin41 + poin42 + poin43 + poin44 + poin45 + poin46 + poin47 + poin48) AS total
        FROM
            `data_laporan`
        WHERE MONTH(data_laporan.tanggal) = 02
        GROUP BY MONTH(data_laporan.tanggal)');
            
            
            return view('rekapbidang', ['key'=>'rekapbidang'])
            ->with('datas1', $datas1);
        }
        
        
    
    
    
}
}