<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


	class jasa_historyController extends Controller{

		public function index(){

		$jh = DB::table('jasa_usaha')->get();
        return view('jasa_history',compact('jh'));
	}

		 function hapusjasa_history($id){
        
        DB::table('jasa_usaha')->where('ID_jasa_usaha',$id)->delete();
        return redirect('jasa_history');
    }

}

?>