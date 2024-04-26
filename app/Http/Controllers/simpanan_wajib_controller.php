<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class simpanan_wajib_controller extends Controller
{
    public function index()
    {
        $simpanan_wajibb = DB::table('simpanan_wajib')
        
        ->join('anggota', 'simpanan_wajib.ID_anggota', '=', 'anggota.ID_anggota')
        ->get();
        $simpanan_wajibb = DB::table('simpanan_wajib')->get();
        $anggotass = DB::table('anggota')->get();

        return view ('simpanan_wajib',compact('simpanan_wajibb','anggotass'));
}
    public function addsimpanan_wajib(Request $request)
    {
        DB::table('simpanan_wajib')->insert([
            'ID_simpanan_wajib' => $request->ID_simpanan_wajib,
            'ID_anggota' => $request->ID_anggota,
            'tanggal_bayar_wajib' => $request->tanggal_bayar_wajib,
            'nominal_wajib' => $request->nominal_wajib,
            'jumlah_wajib' => $request->jumlah_wajib,
        ]);

        return redirect('simpanan_wajib')->with('success', 'Data Berhasil Ditambahkan !!!');
    }
    function updatesimpanan_wajib(Request $request){
        DB::table('simpanan_wajib')->where('ID_simpanan_wajib',$request->ID_simpanan_wajib)->update([
            'ID_simpanan_wajib' => $request->ID_simpanan_wajib,
            'ID_anggota' => $request->ID_anggota,
            'tanggal_bayar_wajib' => $request->tanggal_bayar_wajib,
            'nominal_wajib' => $request->nominal_wajib,
            'jumlah_wajib' => $request->jumlah_wajib,


            ]);
        
            return redirect('simpanan_wajib')->with('success', 'Data Berhasil Diperbaharui !!!');
    }
    function hapussimpanan_wajib($id){
        DB::table('simpanan_wajib')->where('ID_simpanan_wajib',$id)->delete();
        return redirect('simpanan_wajib')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
