<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EvdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index( Request $request) {
        $Userid = Auth::id();
        
            $datas = DB::select('select * from data_laporan WHERE data_laporan.id like :id', ['id'=>$Userid]);
            return view('evdata.index', ['key'=>'evdata'])
                ->with('datas', $datas)  ;
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evdata.add', ['key'=>'evdata']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'poin11' => $request->poin11,
            'poin12' => $request->poin12,
            'poin13' => $request->poin13,
            'poin14' => $request->poin14,
            'poin15' => $request->poin15,
            'poin16' => $request->poin16,
            'poin17' => $request->poin17,
            'poin18' => $request->poin18,
            
            'poin21' => $request->poin21,
            'poin22' => $request->poin22,
            'poin23' => $request->poin23,
            'poin24' => $request->poin24,
            'poin25' => $request->poin25,
            'poin26' => $request->poin26,
            'poin27' => $request->poin27,
            'poin28' => $request->poin28,

            
            'poin31' => $request->poin31,
            'poin32' => $request->poin32,
            'poin33' => $request->poin33,
            'poin34' => $request->poin34,
            'poin35' => $request->poin35,
            'poin36' => $request->poin36,
            'poin37' => $request->poin37,
            'poin38' => $request->poin38,

            'poin41' => $request->poin41,
            'poin42' => $request->poin42,
            'poin43' => $request->poin43,
            'poin44' => $request->poin44,
            'poin45' => $request->poin45,
            'poin46' => $request->poin46,
            'poin47' => $request->poin47,
            'poin48' => $request->poin48,
            
            'foto' => $request->foto,
            'id' => $request->id,
        ]
        );

        return redirect()->route('evdata.index', ['key'=>'evdata'])->with('success', 'Data created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Evdata $evdata)
    {
        return view('evdata.detail', compact('evdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('data_laporan')->where('id_data', $id)->first();

        return view('evdata.edit', ['key'=>''])->with('data', $data) ;
        /*return view('users.edit', compact('user'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'shift' => 'required',
            'id_bidang' => 'required',
            'foto' => 'required',
        ]);

        DB::update('UPDATE data_laporan SET tanggal = :tanggal, shift = :shift, id_bidang = :id_bidang, foto = :foto WHERE id_data = :id_data',
        [
            'id_data' => $id,
            'tanggal' => $request->tanggal,
            'shift' => $request->shift,
            'id_bidang' => $request->id_bidang,
            'foto' => $request->foto,
        ]
        );
        /*
        $user->update($request->all());*/
        return redirect()->route('evdata.index')->with('success', 'Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
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
