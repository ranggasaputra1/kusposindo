<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class jasa_usahaController extends Controller
{
    public function index()
    {
        $jasa_usahaa = DB::table('jasa_usaha')
        
        ->join('anggota', 'jasa_usaha.ID_anggota', '=', 'anggota.ID_anggota')
        ->get();
        $jasa_usahaa = DB::table('jasa_usaha')->get();
        $anggotass = DB::table('anggota')->get();

        return view ('jasa_usaha',compact('jasa_usahaa','anggotass'));
}
    public function addjasa_usaha(Request $request) 
    {
        DB::table('jasa_usaha')->insert([
            'ID_jasa_usaha' => $request->ID_jasa_usaha,
            'ID_anggota' => $request->ID_anggota,
            'tanggal_bayar_jasa' => $request->tanggal_bayar_jasa,
            'nominal_jasa' => $request->nominal_jasa,
        ]);

        return redirect('jasa_usaha')->with('success', 'Data Berhasil Ditambahkan !!!');
    }
    function updatejasa_usaha(Request $request){
        DB::table('jasa_usaha')->where('ID_jasa_usaha',$request->ID_jasa_usaha)->update([
            'ID_jasa_usaha' => $request->ID_jasa_usaha,
            'ID_anggota' => $request->ID_anggota,
            'tanggal_bayar_jasa' => $request->tanggal_bayar_jasa,
            'nominal_jasa' => $request->nominal_jasa,


            ]);
        
            return redirect('jasa_usaha')->with('success', 'Data Berhasil Diperbaharui !!!');
    }
    function hapusjasa_usaha($id){
        DB::table('jasa_usaha')->where('ID_jasa_usaha',$id)->delete();
        return redirect('jasa_usaha')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
