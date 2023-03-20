<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register()
    {
        return view('users.register');
    }
    public function registered(Request $request)
    {
        $user = User::create([
            'nama' => $request -> nama,
            'nip' => $request -> nip,
            'email' => $request -> email,
            'jabatan' => $request -> jabatan,
            'wilayah' => $request -> wilayah,
            'password' => bcrypt ($request -> password),
        ]);
        return redirect('/user')->with('success', 'Data user berhasil ditambahkan');
    }

    public function login()
    {
        return view('login');
    }

    public function ceklogin(Request $request)
    {
        if (!Auth::attempt([
            'nip' => $request -> nip , 
            'password' => $request -> password
        ]))
        {
            return redirect('/');
        }
        else{
            return redirect('/dashboard');
        }
    }
    public function handle($request, $next)
    {
        return Auth::onceBasic() ?: $next($request);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
