<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('Error');
});
// visi misi 
Route::get('/visimisi', function () {
    return view('visimisi');
});
// Struktur Organisasi
Route::get('/struktur_organisasi', function () {
    return view('struktur_organisasi');
});
// budaya kerja 
Route::get('/budaya_kerja', function () {
    return view('budaya_kerja');
});
// formulir 
Route::get('/formulir', function () {
    return view('formulir');
});
// berita dan media 
Route::get('/berita_media', function () {
    return view('berita_media');
});
// produk_kita 
Route::get('/produk_kita', function () {
    return view('produk_kita');
});
// kontak 
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/login', 'App\Http\Controllers\LoginController@index')->middleware('guest');
Route::post('/login', 'App\Http\Controllers\LoginController@authenticate');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');


Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\RegisterController@store');



Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cek_login:admin']], function(){
        Route::get('/admin', 'App\Http\Controllers\beranda_adminController@index')->name('beranda');

        // Route Anggota
    Route::get('anggota','App\Http\Controllers\anggotacontroller@index')->name('anggota');

    Route::post('anggota/add','App\Http\Controllers\anggotacontroller@addanggota')->name('addanggota');

    Route::get('anggota/ubah{id}','App\Http\Controllers\anggotacontroller@ubahanggota')->name('ubahanggota');

    Route::post('anggota/update','App\Http\Controllers\anggotacontroller@updateanggota')->name('updateanggota');

    Route::get('anggota/hapus/{id}','App\Http\Controllers\anggotacontroller@hapusanggota')->name('hapusanggota');

     // Route Simpanan_Pokok
    Route::get('simpanan_pokok','App\Http\Controllers\simpanan_pokokcontroller@index')->name('simpanan_pokok');

    Route::post('simpanan_pokok/add','App\Http\Controllers\simpanan_pokokcontroller@addsimpanan_pokok')->name('addsimpanan_pokok');

    Route::get('simpanan_pokok/ubah{id}','App\Http\Controllers\simpanan_pokokcontroller@ubahsimpanan_pokok')->name('ubahsimpanan_pokok');

    Route::post('simpanan_pokok/update','App\Http\Controllers\simpanan_pokokcontroller@updatesimpanan_pokok')->name('updatesimpanan_pokok');

    Route::get('simpanan_pokok/hapus/{id}','App\Http\Controllers\simpanan_pokokcontroller@hapussimpanan_pokok')->name('hapussimpanan_pokok');
        

  // Route Simpanan_wajib
    Route::get('simpanan_wajib','App\Http\Controllers\simpanan_wajib_controller@index')->name('simpanan_wajib');

    Route::post('simpanan_wajib/add','App\Http\Controllers\simpanan_wajib_controller@addsimpanan_wajib')->name('addsimpanan_wajib');

    Route::get('simpanan_wajib/ubah{id}','App\Http\Controllers\simpanan_wajib_controller@ubahsimpanan_wajib')->name('ubahsimpanan_wajib');

    Route::post('simpanan_wajib/update','App\Http\Controllers\simpanan_wajib_controller@updatesimpanan_wajib')->name('updatesimpanan_wajib');

    Route::get('simpanan_wajib/hapus/{id}','App\Http\Controllers\simpanan_wajib_controller@hapussimpanan_wajib')->name('hapussimpanan_wajib');

     // Route Simpanan_Sukarela
     Route::get('simpanan_sukarela','App\Http\Controllers\simpanan_sukarelaController@index')->name('simpanan_sukarela');

     Route::post('simpanan_sukarela/add','App\Http\Controllers\simpanan_sukarelaController@addsimpanan_sukarela')->name('addsimpanan_sukarela');
 
     Route::get('simpanan_sukarela/ubah{id}','App\Http\Controllers\simpanan_sukarelaController@ubahsimpanan_sukarela')->name('ubahsimpanan_sukarela');
 
     Route::post('simpanan_sukarela/update','App\Http\Controllers\simpanan_sukarelaController@updatesimpanan_sukarela')->name('updatesimpanan_sukarela');
 
     Route::get('simpanan_sukarela/hapus/{id}','App\Http\Controllers\simpanan_sukarelaController@hapussimpanan_sukarela')->name('hapussimpanan_sukarela');
     
      // Route Jasa Usaha
     Route::get('jasa_usaha','App\Http\Controllers\jasa_usahaController@index')->name('jasa_usaha');
     Route::post('jasa_usaha/add','App\Http\Controllers\jasa_usahaController@addjasa_usaha')->name('addjasa_usaha');
     Route::get('jasa_usaha/ubah{id}','App\Http\Controllers\jasa_usahaController@ubahjasa_usaha')->name('ubahjasa_usaha');
     Route::post('jasa_usaha/update','App\Http\Controllers\jasa_usahaController@updatejasa_usaha')->name('updatejasa_usaha');
     Route::get('jasa_usaha/hapus/{id}','App\Http\Controllers\jasa_usahaController@hapusjasa_usaha')->name('hapusjasa_usaha');


      // Route Produk
     Route::get('produk','App\Http\Controllers\produkController@index')->name('produk');

     Route::post('produk/add','App\Http\Controllers\produkController@addproduk')->name('addproduk');
 
     Route::get('produk/ubah{id}','App\Http\Controllers\produkController@ubahproduk')->name('ubahproduk');
 
     Route::post('produk/update','App\Http\Controllers\produkController@updateproduk')->name('updateproduk');
 
     Route::get('produk/hapus/{id}','App\Http\Controllers\produkController@hapusproduk')->name('hapusproduk');

      // Route Kredit
     Route::get('kredit','App\Http\Controllers\kreditController@index')->name('kredit');

     Route::post('kredit/add','App\Http\Controllers\kreditController@addkredit')->name('addkredit');
 
     Route::get('kredit/ubah{id}','App\Http\Controllers\kreditController@ubahkredit')->name('ubahkredit');
 
     Route::post('kredit/update','App\Http\Controllers\kreditController@updatekredit')->name('updatekredit');
 
     Route::get('kredit/hapus/{id}','App\Http\Controllers\kreditController@hapuskredit')->name('hapuskredit');

      //Route Pokok_history
    Route::get('pokok_history','App\Http\Controllers\pokok_historyController@index')->name('pokok_history');
    Route::get('pokok_history/hapus/{id}','App\Http\Controllers\pokok_historyController@hapuspokok_history')->name('hapuspokok_history');

    //Route Pokok History Cetak
     Route::get('pokok_history_cetak','App\Http\Controllers\pokok_history_cetakController@index')->name('pokok_history_cetak');

     //Route wajib_history
      Route::get('wajib_history','App\Http\Controllers\wajib_historyController@index')->name('wajib_history');
      Route::get('wajib_history/hapus/{id}','App\Http\Controllers\wajib_historyController@hapuswajib_history')->name('hapuswajib_history');
     
      //Route Wajib History Cetak
       Route::get('wajib_history_cetak','App\Http\Controllers\wajib_history_cetakController@index')->name('wajib_history_cetak');

    //Route sukarela_history
    Route::get('sukarela_history','App\Http\Controllers\sukarela_historyController@index')->name('sukarela_history');
    Route::get('sukarela_history/hapus/{id}','App\Http\Controllers\sukarela_historyController@sukarela_history')->name('sukarela_history');

    //Route sukarela_history Cetak
     Route::get('sukarela_history_cetak','App\Http\Controllers\sukarela_history_cetakController@index')->name('sukarela_history_cetak');

     //Route Jasa_Usaha History
    Route::get('jasa_history','App\Http\Controllers\jasa_historyController@index')->name('jasa_history');
    Route::get('jasa_history/hapus/{id}','App\Http\Controllers\sukarela_historyController@sukarela_history')->name('jasa_history');
    //Route Jasa_history Cetak
     Route::get('jasa_history_cetak','App\Http\Controllers\jasa_history_cetakController@index')->name('jasa_history_cetak');

    //Route kredit_history
    Route::get('kredit_history','App\Http\Controllers\kredit_historyController@index')->name('kredit_history');
    Route::get('kredit_history/hapus/{id}','App\Http\Controllers\kredit_historyController@kredit_history')->name('kredit_history');

    //Route kredit_history Cetak
     Route::get('kredit_history_cetak','App\Http\Controllers\kredit_history_cetakController@index')->name('kredit_history_cetak');

     //Route produk_history
    Route::get('produk_history','App\Http\Controllers\produk_historyController@index')->name('produk_history');
    Route::get('produk_history/hapus/{id}','App\Http\Controllers\produk_historyController@produk_history')->name('produk_history');

    //Route produk_history Cetak
     Route::get('produk_history_cetak','App\Http\Controllers\produk_history_cetakController@index')->name('produk_history_cetak');


    });

    Route::group(['middleware' => ['cek_login:user']], function(){

        // Route User
    Route::get('/user','App\Http\Controllers\beranda_userController@index')->name('user');
   

    });
});

    
    