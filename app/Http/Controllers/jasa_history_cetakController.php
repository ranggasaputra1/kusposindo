<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jasa_history_cetakController extends Controller
{
    public function index()
    {
        $jhc = DB::table('jasa_usaha')->get();
        return view('jasa_history_cetak',compact('jhc'));
    }
}
