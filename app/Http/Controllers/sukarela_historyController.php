<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


	class sukarela_historyController extends Controller{

		public function index(){

		$sh = DB::table('simpanan_sukarela')->get();
        return view('sukarela_history',compact('sh'));
	}

		 function hapussukarela_history($id){
        
        DB::table('simpanan_sukarela')->where('ID_simpanan_sukareala',$id)->delete();
        return redirect('sukarela_history');
    }

}

?>