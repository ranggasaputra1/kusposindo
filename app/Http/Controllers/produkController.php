<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
        $p = DB::table('produk')->get();
        return view('produk',compact('p'));
    }
    public function addproduk(Request $request)
    {
        DB::table('produk')->insert([
            'ID_produk' => $request->ID_produk,
            'nama_produk' => $request->nama_produk,
            'jumlah_masuk' => $request->jumlah_masuk,
            'tanggal_masuk' => $request->tanggal_masuk,
            'sisa_produk' => $request->sisa_produk,
        ]);
        return redirect('produk')->with('success', 'Data Berhasil Ditambahkan !!!');
    
}
    function updateproduk(Request $request){
        DB::table('produk')->where('ID_produk',$request->ID_produk)->update([
            'ID_produk' => $request->ID_produk,
            'nama_produk' => $request->nama_produk,
            'jumlah_masuk' => $request->jumlah_masuk,
            'tanggal_masuk' => $request->tanggal_masuk,
            'sisa_produk' => $request->sisa_produk,

            ]);
        
        return redirect('produk')->with('success', 'Data Berhasil Diperbaharui !!!');
    }
    function hapusproduk($id){
        DB::table('produk')->where('ID_produk',$id)->delete();
        return redirect('produk')->with('success', 'Data Berhasil Dihapus !!!');
    }

}