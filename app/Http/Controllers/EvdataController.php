<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class EvdataController extends Controller
{
     public function index( Request $request) {
        $Userid = Auth::id();
        
            $datas = DB::select('select * from data_laporan WHERE data_laporan.id like :id', ['id'=>$Userid]);
            return view('evdata.index', ['key'=>'evdata'])
                ->with('datas', $datas)  ;
    }

    public function create()
    {
        
        return view('evdata.add', ['key'=>'evdata']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'poin11' => '',
            'poin12' => '',
            'poin13' => '',
            'poin14' => '',
            'poin15' => '',
            'poin16' => '',
            'poin17' => '',
            'poin18' => '',
            
            'poin21' => '',
            'poin22' => '',
            'poin23' => '',
            'poin24' => '',
            'poin25' => '',
            'poin26' => '',
            'poin27' => '',
            'poin28' => '',

            'poin31' => '',
            'poin32' => '',
            'poin33' => '',
            'poin34' => '',
            'poin35' => '',
            'poin36' => '',
            'poin37' => '',
            'poin38' => '',

            'poin41' => '',
            'poin42' => '',
            'poin43' => '',
            'poin44' => '',
            'poin45' => '',
            'poin46' => '',
            'poin47' => '',
            'poin48' => '',

            
            'foto' => '',
            'id' => 'required',
        ]);
        
        DB::insert('INSERT INTO data_laporan(tanggal, poin11, poin12, poin13, poin14, poin15, poin16, poin17, poin18,
        poin21, poin22, poin23, poin24, poin25, poin26, poin27, poin28,
        poin31, poin32, poin33, poin34, poin35, poin36, poin37, poin38,
        poin41, poin42, poin43, poin44, poin45, poin46, poin47, poin48, foto, id) VALUES (:tanggal, :poin11, :poin12, :poin13, :poin14, :poin15, :poin16, :poin17, :poin18,
        :poin21, :poin22, :poin23, :poin24, :poin25, :poin26, :poin27, :poin28,
        :poin31, :poin32, :poin33, :poin34, :poin35, :poin36, :poin37, :poin38,
        :poin41, :poin42, :poin43, :poin44, :poin45, :poin46, :poin47, :poin48, :foto, :id)',
        [
            'tanggal' => $request->tanggal,
            'poin11' => is_null($request->poin11)? '0' : $request->poin11,
            'poin12' => is_null($request->poin12)? '0' : $request->poin12,
            'poin13' => is_null($request->poin13)? '0' : $request->poin13,
            'poin14' => is_null($request->poin14)? '0' : $request->poin14,
            'poin15' => is_null($request->poin15)? '0' : $request->poin15,
            'poin16' => is_null($request->poin16)? '0' : $request->poin16,
            'poin17' => is_null($request->poin17)? '0' : $request->poin17,
            'poin18' => is_null($request->poin18)? '0' : $request->poin18,
            
            'poin21' => is_null($request->poin21)? '0' : $request->poin21,
            'poin22' => is_null($request->poin22)? '0' : $request->poin22,
            'poin23' => is_null($request->poin23)? '0' : $request->poin23,
            'poin24' => is_null($request->poin24)? '0' : $request->poin24,
            'poin25' => is_null($request->poin25)? '0' : $request->poin25,
            'poin26' => is_null($request->poin26)? '0' : $request->poin26,
            'poin27' => is_null($request->poin27)? '0' : $request->poin27,
            'poin28' => is_null($request->poin28)? '0' : $request->poin28,

            
            'poin31' => is_null($request->poin31)? '0' : $request->poin31,
            'poin32' => is_null($request->poin32)? '0' : $request->poin32,
            'poin33' => is_null($request->poin33)? '0' : $request->poin33,
            'poin34' => is_null($request->poin34)? '0' : $request->poin34,
            'poin35' => is_null($request->poin35)? '0' : $request->poin35,
            'poin36' => is_null($request->poin36)? '0' : $request->poin36,
            'poin37' => is_null($request->poin37)? '0' : $request->poin37,
            'poin38' => is_null($request->poin38)? '0' : $request->poin38,

            'poin41' => is_null($request->poin41)? '0' : $request->poin41,
            'poin42' => is_null($request->poin42)? '0' : $request->poin42,
            'poin43' => is_null($request->poin43)? '0' : $request->poin43,
            'poin44' => is_null($request->poin44)? '0' : $request->poin44,
            'poin45' => is_null($request->poin45)? '0' : $request->poin45,
            'poin46' => is_null($request->poin46)? '0' : $request->poin46,
            'poin47' => is_null($request->poin47)? '0' : $request->poin47,
            'poin48' => is_null($request->poin48)? '0' : $request->poin48,
            
            'foto' => $request->foto,
            'id' => $request->id,
        ]
        );

        return redirect()->route('evdata.index', ['key'=>'evdata'])->with('success', 'Data created successfully.');
    }

    public function show(Evdata $evdata)
    {
        return view('evdata.detail', compact('evdata'));
    }

    // public function edit($id)
    // {
    //     $data = DB::table('data_laporan')->where('id_data', $id)->first();

    //     return view('evdata.edit', ['key'=>''])->with('data', $data) ;
    //     /*return view('users.edit', compact('user'));*/
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\User  $user
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update($id, Request $request)
    // {
    //     $request->validate([
    //         'poin11' => '',
    //         'poin12' => '',
    //         'poin13' => '',
    //         'poin14' => '',
    //         'poin15' => '',
    //         'poin16' => '',
    //         'poin17' => '',
    //         'poin18' => '',
            
    //         'poin21' => '',
    //         'poin22' => '',
    //         'poin23' => '',
    //         'poin24' => '',
    //         'poin25' => '',
    //         'poin26' => '',
    //         'poin27' => '',
    //         'poin28' => '',

    //         'poin31' => '',
    //         'poin32' => '',
    //         'poin33' => '',
    //         'poin34' => '',
    //         'poin35' => '',
    //         'poin36' => '',
    //         'poin37' => '',
    //         'poin38' => '',

    //         'poin41' => '',
    //         'poin42' => '',
    //         'poin43' => '',
    //         'poin44' => '',
    //         'poin45' => '',
    //         'poin46' => '',
    //         'poin47' => '',
    //         'poin48' => '',
            
    //         'tanggal' => 'required',
    //         // 'shift' => 'required',
    //         // 'id_bidang' => 'required',
    //         'foto' => '',
    //         // 'id' => '',
    //     ]);

    //     DB::update('UPDATE data_laporan SET poin11 = :poin11, poin12 = :poin12, poin13 = :poin13, poin14 = :poin14, poin15 = :poin15, poin16 = :poin16, poin17 = :poin17, poin18 = :poin18,
    //     poin21 = :poin21, poin22 = :poin22, poin23 = :poin23, poin24 = :poin24, poin25 = :poin25, poin26 = :poin26, poin27 = :poin27, poin28 = :poin28,
    //     poin31 = :poin31, poin32 = :poin32, poin33 = :poin33, poin34 = :poin34, poin35 = :poin35, poin36 = :poin36, poin37 = :poin37, poin38 = :poin38,
    //     poin41 = :poin41, poin42 = :poin42, poin43 = :poin43, poin44 = :poin44, poin45 = :poin45, poin46 = :poin46, poin47 = :poin47, poin48 = :poin48, foto = :foto  WHERE id_data = :id_data',
    //     [
    //         // 'id_data' => $id_data,

    //         'poin11' => is_null($request->poin11)? '0' : $request->poin11,
    //         'poin12' => is_null($request->poin12)? '0' : $request->poin12,
    //         'poin13' => is_null($request->poin13)? '0' : $request->poin13,
    //         'poin14' => is_null($request->poin14)? '0' : $request->poin14,
    //         'poin15' => is_null($request->poin15)? '0' : $request->poin15,
    //         'poin16' => is_null($request->poin16)? '0' : $request->poin16,
    //         'poin17' => is_null($request->poin17)? '0' : $request->poin17,
    //         'poin18' => is_null($request->poin18)? '0' : $request->poin18,
            
    //         'poin21' => is_null($request->poin21)? '0' : $request->poin21,
    //         'poin22' => is_null($request->poin22)? '0' : $request->poin22,
    //         'poin23' => is_null($request->poin23)? '0' : $request->poin23,
    //         'poin24' => is_null($request->poin24)? '0' : $request->poin24,
    //         'poin25' => is_null($request->poin25)? '0' : $request->poin25,
    //         'poin26' => is_null($request->poin26)? '0' : $request->poin26,
    //         'poin27' => is_null($request->poin27)? '0' : $request->poin27,
    //         'poin28' => is_null($request->poin28)? '0' : $request->poin28,

            
    //         'poin31' => is_null($request->poin31)? '0' : $request->poin31,
    //         'poin32' => is_null($request->poin32)? '0' : $request->poin32,
    //         'poin33' => is_null($request->poin33)? '0' : $request->poin33,
    //         'poin34' => is_null($request->poin34)? '0' : $request->poin34,
    //         'poin35' => is_null($request->poin35)? '0' : $request->poin35,
    //         'poin36' => is_null($request->poin36)? '0' : $request->poin36,
    //         'poin37' => is_null($request->poin37)? '0' : $request->poin37,
    //         'poin38' => is_null($request->poin38)? '0' : $request->poin38,

    //         'poin41' => is_null($request->poin41)? '0' : $request->poin41,
    //         'poin42' => is_null($request->poin42)? '0' : $request->poin42,
    //         'poin43' => is_null($request->poin43)? '0' : $request->poin43,
    //         'poin44' => is_null($request->poin44)? '0' : $request->poin44,
    //         'poin45' => is_null($request->poin45)? '0' : $request->poin45,
    //         'poin46' => is_null($request->poin46)? '0' : $request->poin46,
    //         'poin47' => is_null($request->poin47)? '0' : $request->poin47,
    //         'poin48' => is_null($request->poin48)? '0' : $request->poin48,
    //         // 'shift' => $request->shift,
    //         // 'id_bidang' => $request->id_bidang,
            
    //         'tanggal' => $request->tanggal,
    //         'foto' => $request->foto,
            
    //     ]
    //     );
    //     /*
    //     $user->update($request->all());*/
    //     return redirect()->route('evdata.index')->with('success', 'Data updated successfully');
    // }

    public function delete($id)
    {
        DB::delete('DELETE FROM data_laporan WHERE id_data = :id_data', ['id_data' => $id]);

        // Menggunakan laravel eloquent
        // Admin::where('id_pajak', $id)->delete();

        // $user->delete();
        return redirect()->route('evdata.index')->with('success', 'Data deleted successfully');
    }

    // public function user()
    // {
    //     $user = User::paginate(2);
    //     return view('user', ['key'=>'user', 'user'=>$user]);
    // }
}
