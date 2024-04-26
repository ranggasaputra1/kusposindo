<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class wajib_history_cetakController extends Controller
{
    public function index()
    {
        $whc = DB::table('simpanan_wajib')->get();
        return view('wajib_history_cetak',compact('whc'));
    }
}
