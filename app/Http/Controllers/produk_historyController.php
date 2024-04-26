<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


	class produk_historyController extends Controller{

		public function index(){

		$ph = DB::table('produk')->get();
        return view('produk_history',compact('ph'));
	}

		 function hapusproduk_history($id){
        
        DB::table('produk')->where('ID_produk',$id)->delete();
        return redirect('produk_history');
    }

}

?>