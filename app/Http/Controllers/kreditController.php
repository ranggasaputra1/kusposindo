<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kreditController extends Controller
{

    public function index()
    {
        $kreditt = DB::table('kredit')
        
        ->join('anggota', 'kredit.ID_anggota', '=', 'anggota.ID_anggota')
        ->get();
        $kreditt = DB::table('kredit')->get();
        $anggotass = DB::table('anggota')->get();

        return view ('kredit',compact('kreditt','anggotass'));
}
    public function addkredit(Request $request)
    {
        DB::table('kredit')->insert([
            'ID_kredit' => $request->ID_kredit,
            'ID_anggota' => $request->ID_anggota,
            'nama_barang_kredit' => $request->nama_barang_kredit,
            'tanggal_kredit' => $request->tanggal_kredit,
            'jangka_waktu_kredit' => $request->jangka_waktu_kredit,
            'nominal' => $request->nominal

        ]);

        return redirect('kredit')->with('success', 'Data Berhasil Ditambahkan !!!');
    }
    function updatekredit(Request $request){
        DB::table('kredit')->where('ID_kredit',$request->ID_kredit)->update([
            'ID_kredit' => $request->ID_kredit,
            'ID_anggota' => $request->ID_anggota,
            'nama_barang_kredit' => $request->nama_barang_kredit,
            'tanggal_kredit' => $request->tanggal_kredit,
            'jangka_waktu_kredit' => $request->jangka_waktu_kredit,
            'nominal' => $request->nominal,
            ]);
        
         return redirect('kredit')->with('success', 'Data Berhasil Diperbaharui !!!');
    }
    function hapuskredit($id){
        DB::table('kredit')->where('ID_kredit',$id)->delete();
        return redirect('kredit')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
?>