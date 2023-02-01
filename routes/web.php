<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EbookController;
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

// landing page
Route::get('/', function () {
    return view('h_landing');
});

// login
Route::get('/login',function(){
    return view('pengguna.login');
})->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware'=>['auth','ceklevel:siswa,pegawai,admin']],function(){
    //home
    Route::get('/home', [EbookController::class, 'index'])->name('ebook'); //menampilkan data
    Route::get('/view{id}', [EbookController::class, 'view'])->name('view'); //menampilkan data untuk membaca pdf
});

Route::group(['middleware'=>['auth','ceklevel:siswa,pegawai']],function(){
    //katalog
    Route::get('/katalog', [BukuController::class, 'indexx'])->name('buku'); //menampilkan data katalog bagian user 
});

Route::group(['middleware'=>['auth','ceklevel:admin']],function(){
    // crud ebook admin
    Route::get('/crudebook', [EbookController::class, 'indexx'])->name('ebook'); //halaman crud ebook admin
    Route::post('/storeeb', [EbookController::class, 'store'])->name('storeeb'); //simpan data buku admin
    Route::get('/hapuseb/{id}', [EbookController::class, 'hapus'])->name('hapuseb'); //hapus data ebook
    Route::post('/updateeb/{id}', [EbookController::class, 'update'])->name('updateeb'); //update data ebook
    Route::get('/showeb/{id}', [EbookController::class, 'show'])->name('showeb'); //menampilkan data update ebook

    //katalog admin
    Route::get('/katalogadmin', [BukuController::class, 'indexxx'])->name('buku'); //menampilkan data katalog bagian admin

    // crud buku admin
    Route::get('/crudbuku', [BukuController::class, 'index'])->name('buku'); //halaman crud buku admin
    Route::post('/store', [BukuController::class, 'store'])->name('store'); //simpan data buku admin
    Route::get('/hapus/{id}', [BukuController::class, 'hapus'])->name('hapus'); //hapus data buku
    Route::post('/update/{id}', [BukuController::class, 'update'])->name('update'); //update data buku
    Route::get('/show/{id}', [BukuController::class, 'show'])->name('show'); //menampilkan data update buku

    Route::get('/showr/{id}', [BukuController::class, 'showr'])->name('showr'); //menampilkan data buku yang akan dipinjam
    Route::post('/input', [TransaksiController::class, 'input'])->name('input'); //simpan data input peminjaman

    //activity admin
    Route::get('/peminjaman', [TransaksiController::class, 'indexr'])->name('indexr'); //tampil data
    Route::get('/detail/{id}', [TransaksiController::class, 'detail'])->name('detail'); //menampilkan data detail rental
    Route::get('/hapusx/{id}', [TransaksiController::class, 'hapusx'])->name('hapusx'); //hapus data
    Route::get('/showx/{id}', [TransaksiController::class, 'showx'])->name('showx'); //menampilkan data update
    Route::post('/updatex/{id}', [TransaksiController::class, 'updatex'])->name('updatex'); //update data

    // crud input pengguna aplikasi
    Route::get('/crudpengguna', [UserController::class, 'indexp'])->name('pengguna'); //halaman crud pengguna
    Route::post('/inputp', [UserController::class, 'inputp'])->name('inputp'); //simpan data pengguna
    Route::get('/hapusp/{id}', [UserController::class, 'hapusp'])->name('hapusp'); //hapus data pengguna
    Route::post('/updatep/{id}', [UserController::class, 'updatep'])->name('updatep'); //update data pengguna
    Route::get('/showp/{id}', [UserController::class, 'showp'])->name('showp'); //menampilkan data update pengguna

});












