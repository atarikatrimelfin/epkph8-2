<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
         public function index() {

        // $users = User::paginate(10);
        $users = User::all();
        return view('users.index', ['key'=>'user'])
            ->with('datas', $users)  ;

        // $data = [
        //     'datas' => User::all(),
        // ];
        // return view('users.index', ['key'=>'user']);
     }

    //  public function search(Request $request){

    //     $search = $request->search;

    //     $users = DB::table('users')
    //     ->where('nama', 'like', "%".$search."%")
    //     ->paginate();

    //     return view('users.index', ['key'=>'user'])
    //         ->with('datas', $users)  ;
    //     if($request->has('search')){
    //     $datas = DB::select('select * from users WHERE nama like :search',[
    //         'search'=>'%'.$request->search.'%',
    //     ]);

    //     return view('users.index', ['key'=>'user'])
    //         ->with('datas', $datas);
    //     }
    //    else{
    //     $datas = DB::select('select * from users');

    //     return view('users.index', ['key'=>'user'])
    //         ->with('datas', $datas);
    //    }
    // }
    
    public function create()
    {
        return view('user.add', ['key'=>'']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'wilayah' => 'required',
            'level' => 'required',
        ]);
        
        User::create($request->all());
        return redirect()->route('user.index')->with('success', 'User created successfully.');

        
    }

    public function show(User $user)
    {
        return view('user.detail', compact('user'));
    }

    public function edit($id)
    {
        $data = DB::table('users')->where('id', $id)->first();

        return view('users.edit', ['key'=>''])->with('data', $data) ;
        /*return view('users.edit', compact('user'));*/
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'wilayah' => 'required',
        ]);

        DB::update('UPDATE users SET nama = :nama, nip = :nip, jabatan = :jabatan, wilayah = :wilayah WHERE id = :id',
        [
            'id' => $id,
            'nama' => $request->nama,
            'nip' => $request->nip,
            'jabatan' => $request->jabatan,
            'wilayah' => $request->wilayah,
        ]
        );
        /*
        $user->update($request->all());*/
        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    public function delete($id)
    {
        DB::delete('DELETE FROM users WHERE id = :id', ['id' => $id]);

        // Menggunakan laravel eloquent
        // Admin::where('id_pajak', $id)->delete();

        // $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }

    // public function user()
    // {
    //     $user = User::paginate(2);
    //     return view('user', ['key'=>'user', 'user'=>$user]);
    // }
}
