<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pokok_history_cetakController extends Controller
{
    public function index()
    {
        $phc = DB::table('simpanan_pokok')->get();
        return view('pokok_history_cetak',compact('phc'));
    }
}
