<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class beranda_adminController extends Controller
{

    public function index()
    {
        return view('beranda_admin');

    }
}
