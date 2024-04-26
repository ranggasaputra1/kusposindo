<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {

        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('name','password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect()->intended('admin')->with('success', 'Selamat Datang ');
            }elseif($user->role == 'user'){
                return redirect()->intended('user')->with('success', 'Selamat Datang ');;
            }

        return redirect()->intended('/');

        }

        return back()->with('logingagal', 'Login Gagal Pastikan Username dan Password Benar');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
