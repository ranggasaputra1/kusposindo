<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produk_history_cetakController extends Controller
{
    public function index()
    {
        $phc = DB::table('produk')->get();
        return view('produk_history_cetak',compact('phc'));
    }
}
