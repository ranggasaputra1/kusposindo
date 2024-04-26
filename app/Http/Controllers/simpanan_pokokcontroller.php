<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class simpanan_pokokcontroller extends Controller
{
    public function index()
    {
        $simpanan_pokokk = DB::table('simpanan_pokok')
        
        ->join('anggota', 'simpanan_pokok.ID_anggota', '=', 'anggota.ID_anggota')
        ->get();
        $simpanan_pokokk = DB::table('simpanan_pokok')->get();
        $anggotass = DB::table('anggota')->get();

        return view ('simpanan_pokok',compact('simpanan_pokokk','anggotass'));
}
    public function addsimpanan_pokok(Request $request) 
    {
        DB::table('simpanan_pokok')->insert([
            'ID_simpanan_pokok' => $request->ID_simpanan_pokok,
            'ID_anggota' => $request->ID_anggota,
            'tanggal_bayar_pokok' => $request->tanggal_bayar_pokok,
            'nominal_pokok' => $request->nominal_pokok,
        ]);

        return redirect('simpanan_pokok')->with('success', 'Data Berhasil Ditambahkan !!!');
    }
    function updatesimpanan_pokok(Request $request){
        DB::table('simpanan_pokok')->where('ID_simpanan_pokok',$request->ID_simpanan_pokok)->update([
            'ID_simpanan_pokok' => $request->ID_simpanan_pokok,
            'ID_anggota' => $request->ID_anggota,
            'tanggal_bayar_pokok' => $request->tanggal_bayar_pokok,
            'nominal_pokok' => $request->nominal_pokok,


            ]);
        
            return redirect('simpanan_pokok')->with('success', 'Data Berhasil Diperbaharui !!!');
    }
    function hapussimpanan_pokok($id){
        DB::table('simpanan_pokok')->where('ID_simpanan_pokok',$id)->delete();
        return redirect('simpanan_pokok')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
