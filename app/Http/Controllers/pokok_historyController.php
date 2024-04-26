<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


	class pokok_historyController extends Controller{

		public function index(){

		$pokok_historyy = DB::table('simpanan_pokok')->get();
        return view('pokok_history',compact('pokok_historyy'));
	}

		 function hapussimpanan_pokok($id){
        
        DB::table('simpanan_pokok')->where('ID_simpanan_pokok',$id)->delete();
        return redirect('pokok_history');
    }

}

?>