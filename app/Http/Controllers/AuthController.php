<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    
    public function login(Request $req)
    {
        $data = $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
 
        if (Auth::attempt($data)) {
            return view('layouts.app');
        }else {
            return 'Lu Jomblo';
        }
    }


    public function tampil_register()
    {
        return view('register');
        // return 'halaman register';
    }
    public function register_masyarakat(Request $req)
    {
        $data = $req->validate([
            'nik' => 'required',
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required'
        ]);

        $user = User::create([
            'nik' => $req->nik,
            'name' => $req->name,
            'username' => $req->username,
            'password' => bcrypt($req->password),
            'telp' => $req->telp
        ]);

        $user->attachRole('masyarkat');
        Auth::login($user);
        return 'register berhasil';

    }
}
