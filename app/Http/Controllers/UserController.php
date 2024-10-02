<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['key' => 'user'])->with('datas', $users);
    }

    public function create()
    {
        return view('user.add', ['key' => '']);
    }

    public function edit($id)
    {
        $data = DB::table('users')->where('id', $id)->first();

        return view('users.edit', ['key' => ''])->with('data', $data);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'wilayah' => 'required',
        ]);

        DB::update(
            'UPDATE users SET nama = :nama, nip = :nip, jabatan = :jabatan, wilayah = :wilayah WHERE id = :id',
            [
                'id' => $id,
                'nama' => $request->nama,
                'nip' => $request->nip,
                'jabatan' => $request->jabatan,
                'wilayah' => $request->wilayah,
            ]
        );

        return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui');
    }

    public function delete($id)
    {
        DB::delete('DELETE FROM users WHERE id = :id', ['id' => $id]);
        return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus');
    }
}
