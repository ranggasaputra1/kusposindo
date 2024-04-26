<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class anggotacontroller extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $anggotass = DB::table('anggota')->get();
        return view('anggota',compact('anggotass'));

    }
    public function addanggota(Request $request)
    {
        DB::table('anggota')->insert([
            'ID_anggota' => $request->ID_anggota,
            'nama_anggota' => $request->nama_anggota,
            'NIK_anggota' => $request->NIK_anggota,
            'alamat_anggota' => $request->alamat_anggota,
            'no_telp_anggota' => $request->no_telp_anggota,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
        ]);
        return redirect('anggota')->with('success', 'Data Berhasil Ditambahkan !!!');
    
}
    function updateanggota(Request $request){
        DB::table('anggota')->where('ID_anggota',$request->ID_anggota)->update([
            'ID_anggota' => $request->ID_anggota,
            'nama_anggota' => $request->nama_anggota,
            'NIK_anggota' => $request->NIK_anggota,
            'alamat_anggota' => $request->alamat_anggota,
            'no_telp_anggota' => $request->no_telp_anggota,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,

            ]);
        
        return redirect('anggota')->with('success', 'Data Berhasil Diperbaharui !!!');
    }
    function hapusanggota($id){
        DB::table('anggota')->where('ID_anggota',$id)->delete();
        return redirect('anggota')->with('success', 'Data Berhasil Dihapus !!!');
    }


}