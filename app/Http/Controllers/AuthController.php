<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpan(Request $request)
    {
        User::create([
            'nik_user' => $request->nik_user,
            'nama_user' => $request->nama_user,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/');
    }

    public function login(){
        return view('login');
    }

    //akan otomatis membuat session
    public function ceklogin(Request $request)
    {
        //kiri harus sesuai model(fillable), kanan harus sesuai form (name)
        if(
            Auth::attempt([ //attempt untuk membandingkan apa yang ada diform dengan yang ada di database -> hasilnya boolean
                'nik_user' => $request->nik_user, 
                'password' => $request->password])
        ){
            return redirect('/home');
        } else {
            return redirect('/');
        }
    }   

    public function task(){
        return view('task');
    }

    public function logout()
    {
        Auth::logout(); //otomatis mematikan session
        return redirect('/');
    }

    

}
