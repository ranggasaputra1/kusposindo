<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sukarela_history_cetakController extends Controller
{
    public function index()
    {
        $shc = DB::table('simpanan_sukarela')->get();
        return view('sukarela_history_cetak',compact('shc'));
    }
}
