<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HarianController extends Controller{
    public function harian(Request $request) {
        // if($request->has('search')){
            if($request->has('search')){
                $datas1 = DB::select('SELECT users.nama,
                users.id,
                users.wilayah,
                users.jabatan,
                data_laporan.id,
                SUM(poin11) AS sum11,
                SUM(poin12) AS sum12,
                SUM(poin13) AS sum13,
                SUM(poin14) AS sum14,
                SUM(poin15) AS sum15,
                SUM(poin16) AS sum16,
                SUM(poin17) AS sum17,
                SUM(poin18) AS sum18,
                SUM(poin11 + poin12 + poin13 + poin14 + poin15 + poin16 + poin17 + poin18) AS jum1,
        
        SUM(poin21) AS sum21,
        SUM(poin22) AS sum22,
        SUM(poin23) AS sum23,
        SUM(poin24) AS sum24,
        SUM(poin25) AS sum25,
        SUM(poin26) AS sum26,
        SUM(poin27) AS sum27,
        SUM(poin28) AS sum28,
        SUM(poin21 + poin22 + poin23 + poin24 + poin25 + poin26 + poin27 + poin28) AS jum2,
        
        SUM(poin31) AS sum31,
        SUM(poin32) AS sum32,
        SUM(poin33) AS sum33,
        SUM(poin34) AS sum34,
        SUM(poin35) AS sum35,
        SUM(poin36) AS sum36,
        SUM(poin37) AS sum37,
        SUM(poin38) AS sum38,
        SUM(poin31 + poin32 + poin33 + poin34 + poin35 + poin36 + poin37 + poin38) AS jum3,
        
        SUM(poin41) AS sum41,
        SUM(poin42) AS sum42,
        SUM(poin43) AS sum43,
        SUM(poin44) AS sum44,
        SUM(poin45) AS sum45,
        SUM(poin46) AS sum46,
        SUM(poin47) AS sum47,
        SUM(poin48) AS sum48,
        SUM(poin41 + poin42 + poin43 + poin44 + poin45 + poin46 + poin47 + poin48) AS jum4
                FROM `data_laporan`  
                left join users on users.id = data_laporan.id WHERE data_laporan.tanggal like :search GROUP BY data_laporan.id, users.nama, users.id, users.wilayah, users.jabatan ',[
                    'search'=>'%'.$request->search.'%',
                ]);
    
                return view('harian', ['key'=>'harian'])
                ->with('datas1', $datas1);
            }
            else {
                $datas1 = DB::select('SELECT users.nama,
                users.id,
                users.wilayah,
                users.jabatan,
                data_laporan.id,
                SUM(poin11) AS sum11,
                SUM(poin12) AS sum12,
                SUM(poin13) AS sum13,
                SUM(poin14) AS sum14,
                SUM(poin15) AS sum15,
                SUM(poin16) AS sum16,
                SUM(poin17) AS sum17,
                SUM(poin18) AS sum18,
                SUM(poin11 + poin12 + poin13 + poin14 + poin15 + poin16 + poin17 + poin18) AS jum1,
        
        SUM(poin21) AS sum21,
        SUM(poin22) AS sum22,
        SUM(poin23) AS sum23,
        SUM(poin24) AS sum24,
        SUM(poin25) AS sum25,
        SUM(poin26) AS sum26,
        SUM(poin27) AS sum27,
        SUM(poin28) AS sum28,
        SUM(poin21 + poin22 + poin23 + poin24 + poin25 + poin26 + poin27 + poin28) AS jum2,
        
        SUM(poin31) AS sum31,
        SUM(poin32) AS sum32,
        SUM(poin33) AS sum33,
        SUM(poin34) AS sum34,
        SUM(poin35) AS sum35,
        SUM(poin36) AS sum36,
        SUM(poin37) AS sum37,
        SUM(poin38) AS sum38,
        SUM(poin31 + poin32 + poin33 + poin34 + poin35 + poin36 + poin37 + poin38) AS jum3,
        
        SUM(poin41) AS sum41,
        SUM(poin42) AS sum42,
        SUM(poin43) AS sum43,
        SUM(poin44) AS sum44,
        SUM(poin45) AS sum45,
        SUM(poin46) AS sum46,
        SUM(poin47) AS sum47,
        SUM(poin48) AS sum48,
        SUM(poin41 + poin42 + poin43 + poin44 + poin45 + poin46 + poin47 + poin48) AS jum4
                FROM `data_laporan`  
                left join users on users.id = data_laporan.id GROUP BY data_laporan.id, users.nama, users.id, users.wilayah, users.jabatan' );

            return view('harian', ['key'=>'harian'])
            ->with('datas1', $datas1);
            } 
    }
}