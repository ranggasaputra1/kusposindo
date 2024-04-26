<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Alert;

class simpanan_sukarelaController extends Controller
{
    public function index()
    {
        $simpanan_sukarelas = DB::table('simpanan_sukarela')
        
        ->join('anggota', 'simpanan_sukarela.ID_anggota', '=', 'anggota.ID_anggota')
        ->get();
        $simpanan_sukarelas = DB::table('simpanan_sukarela')->get();
        $anggotass = DB::table('anggota')->get();

        return view ('simpanan_sukarela',compact('simpanan_sukarelas','anggotass'));
}
    public function addsimpanan_sukarela(Request $request)
    {
        DB::table('simpanan_sukarela')->insert([
            'ID_simpanan_sukarela' => $request->ID_simpanan_sukarela,
            'ID_anggota' => $request->ID_anggota,
            'tanggal_bayar_sukarela' => $request->tanggal_bayar_sukarela,
            'nominal_sukarela' => $request->nominal_sukarela,
            'jangka_waktu_sukarela' => $request->jangka_waktu_sukarela,
            'jumlah_sukarela' => $request->jumlah_sukarela,

        ]);

        return redirect('simpanan_sukarela')->with('success', 'Data Berhasil Ditambahkan !!!');
    }
    function updatesimpanan_sukarela(Request $request){
        DB::table('simpanan_sukarela')->where('ID_simpanan_sukarela',$request->ID_simpanan_sukarela)->update([
            'ID_simpanan_sukarela' => $request->ID_simpanan_sukarela,
            'ID_anggota' => $request->ID_anggota,
            'tanggal_bayar_sukarela' => $request->tanggal_bayar_sukarela,
            'nominal_sukarela' => $request->nominal_sukarela,
            'jangka_waktu_sukarela' => $request->jangka_waktu_sukarela,
            'jumlah_sukarela' => $request->jumlah_sukarela,

            ]);
        
         return redirect('simpanan_sukarela')->with('success', 'Data Berhasil Diperbaharui !!!');
    }
    function hapussimpanan_sukarela($id){
        DB::table('simpanan_sukarela')->where('ID_simpanan_sukarela',$id)->delete();
        return redirect('simpanan_sukarela')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
