<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class beranda_userController extends Controller
{
    public function index()
    {

        return view('user.beranda_user');
    }
}
