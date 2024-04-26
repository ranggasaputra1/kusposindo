<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


	class kredit_history_cetakController extends Controller{

		public function index(){

		$khc = DB::table('kredit')->get();
        return view('kredit_history_cetak',compact('khc'));
	}

    
}

?>