<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HarianController extends Controller{
    public function harian(Request $request) {
        // if($request->has('search')){
            $datas1 = DB::select('SELECT users.nama, users.id, users.wilayah, users.jabatan, data_laporan.id, data_laporan.id_data,
            data_laporan.poin11, data_laporan.poin12, data_laporan.poin13, data_laporan.poin14, data_laporan.poin15, data_laporan.poin16, data_laporan.poin17, data_laporan.poin18,
            data_laporan.poin21, data_laporan.poin22, data_laporan.poin23, data_laporan.poin24, data_laporan.poin25, data_laporan.poin26, data_laporan.poin27, data_laporan.poin28,
            data_laporan.poin31, data_laporan.poin32, data_laporan.poin33, data_laporan.poin34, data_laporan.poin35, data_laporan.poin36, data_laporan.poin37, data_laporan.poin38,
            data_laporan.poin41, data_laporan.poin42, data_laporan.poin43, data_laporan.poin44, data_laporan.poin45, data_laporan.poin46, data_laporan.poin47, data_laporan.poin48
            FROM `data_laporan`  
            right join users on users.id = data_laporan.id WHERE users.level = "user" AND users.wilayah like "%WILAYAH%" ORDER BY users.wilayah, users.nama' );


            // `data_laporan` LEFT JOIN jam ON jam.shift = data_laporan.shift LEFT JOIN bidang on bidang.id_bidang = data_laporan.id_bidang LEFT JOIN users on users.id = data_laporan.id WHERE data_laporan.id_bidang like 1 AND data_laporan.id like :id',['id'=>$Userid]);
            
            /*$datasum1 = DB::table('data_laporan')
            ->leftjoin('jam', 'data_laporan.shift', '=', 'jam.shift')
            ->leftjoin('bidang', 'data_laporan.id_bidang', '=', 'bidang.id_bidang')
            ->leftjoin('users', 'data_laporan.id', '=', 'users.id')
            ->select('jam.poin', 'users.id', 'bidang.id_bidang')
            ->where('data_laporan.id_bidang', '1')->sum('poin');*/

            //    $users = DB::table('users')
            //->join('contacts', 'users.id', '=', 'contacts.user_id')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            //->select('users.*', 'contacts.phone', 'orders.price')
            //->get();
            //$datas = DB::select('SELECT users.nama, users.jabatan FROM `users` LEFT JOIN jam ON jam.poin = users.poin WHERE users.nama like :search',[
             //   'search'=>'%'.$request->search.'%',
            //]);

        return view('harian', ['key'=>'harian'])
            ->with('datas1', $datas1);
        //}
        //else {
           // $datas = DB::select('SELECT users.nama, users.jabatan FROM `users` LEFT JOIN jam ON jam.poin = users.poin ORDER BY users.nama');

        //return view('harian', ['key'=>'harian'])
         //   ->with('datas', $datas);
        //}
        
    }
}