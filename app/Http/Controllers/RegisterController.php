<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        // $request->session()->flash('success', 'Registration Successfull! Please login');

        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan Login!!!');

    }
}
