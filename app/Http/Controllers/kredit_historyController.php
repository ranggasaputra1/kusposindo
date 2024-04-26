<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


	class kredit_historyController extends Controller{

		public function index(){

		$kh = DB::table('kredit')->get();
        return view('kredit_history',compact('kh'));
	}

		 function hapuskredit_history($id){
        
        DB::table('kredit')->where('ID_kredit',$id)->delete();
        return redirect('kredit_history');
    }

}

?>