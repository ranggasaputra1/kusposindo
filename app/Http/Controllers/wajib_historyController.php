<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


	class wajib_historyController extends Controller{

		public function index(){

		$wajib_historyy = DB::table('simpanan_wajib')->get();
        return view('wajib_history',compact('wajib_historyy'));
	}

		 function hapussimpanan_wajib($id){
        
        DB::table('simpanan_wajib')->where('ID_simpanan_wajib',$id)->delete();
        return redirect('wajib_history');
    }

}

?>