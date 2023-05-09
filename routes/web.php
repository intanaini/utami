<?php

use App\Http\Controllers\BahanMkn;
use App\Http\Controllers\Karyawan;
use App\Http\Controllers\Laporan;
use App\Http\Controllers\Pemesanan;
use App\Http\Controllers\SMenuMkn;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');

    Route::get('karyawan', function () {
        return redirect('/karyawan');
    });

    Route::get('pemesanan', function () {
        return redirect('/pemesanan');
    });
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tambahkry', [Karyawan::class, 'tambahKaryawan'])->name('tambah-karyawan');
Route::any('/insertdata', [Karyawan::class, 'insertdata'])->name('insertdata');
Route::get('/bahanmkn', [BahanMkn::class, 'bahanmkn'])->name('bahanmkn');
Route::any('/insertbhnmkn', [BahanMkn::class, 'insertbhnmkn'])->name('insertbhnmkn');
Route::get('/tambahbhnmkn', [BahanMkn::class, 'tambahbhnmkn1'])->name('tambahbhnmkn');
Route::get('/bahanmnm', [BahanMkn::class, 'bahanmnm'])->name('bahanmnm');
Route::get('/tambahbhnmnm', [BahanMkn::class, 'tambahbhnmnm1'])->name('tambahbhnmnm');
Route::any('/insertbhnmnm', [BahanMkn::class, 'insertbhnmnm'])->name('insertbhnmmnm');
Route::get('/smenumkn', [SMenuMkn::class, 'smenumkn'])->name('smenumkn');
Route::any('/tambahsmenumkn', [SMenuMkn::class, 'tambahsmenumkn'])->name('tambahsmenumkn');
Route::any('/insertsmenumkn', [SMenuMkn::class, 'insertmenumkn'])->name('insertmenumkn');
Route::get('/smenumnm', [SMenuMkn::class, 'smenumnm'])->name('smenumnm');
Route::any('/tambahsmenumnm', [SMenuMkn::class, 'tambahsmenumnm'])->name('tambahsmenumnm');
Route::any('/insertsmenumnm', [SMenuMkn::class, 'insertmenumnm'])->name('insertmenumnm');
Route::delete('/smenumkn/{id}/delete', [SMenuMkn::class, 'destroy']);

// user karyawan
Route::get('/karyawan', [Karyawan::class, 'karyawan'])->name('karyawan');
Route::get('/dftrpesanan', [Karyawan::class, 'dftrpesanan'])->name('dftrpesanan');
Route::get('/dftrreservasi', [Karyawan::class, 'dftrreservasi'])->name('dftrreservasi');


// laporan
Route::get('/lpemasukan', [Laporan::class, 'lpemasukan'])->name('lpemasukan');
Route::get('/lpengeluaran', [Laporan::class, 'lpengeluaran'])->name('lpengeluaran');
Route::get('/coba', [Laporan::class, 'coba'])->name('coba');
Route::get('/masukanperbulan', [Laporan::class, 'masukanperbulan'])->name('masukanperbulan');
Route::get('/pengeluaranperbulan', [Laporan::class, 'pengeluaranperbulan'])->name('pengeluaranperbulan');
Route::post('/lpengeluaran/filter', [Laporan::class, 'lpengeluaran@filter'])->name('lpengeluaran.filter');
Route::post('/laporan/filter', [Laporan::class,'filter'])->name('laporan.filter');

// pemesanan
Route::get('/pemesananmkn', [Pemesanan::class, 'pemesananmkn'])->name('pemesananmkn');
Route::get('/pemesananmnm', [Pemesanan::class, 'pemesananmnm'])->name('pemesananmnm');
Route::get('/pemesananreservasi', [Pemesanan::class, 'pemesananreservasi'])->name('pemesananreservasi');
// Route::post('/insertreservasi', [Pemesanan::class, 'insertreservasi'])->name('insertreservasi');/
// Route::any('/save-total', [Pemesanan::class, 'insertreservasi'])->name('insertreservasi');
// Route::post('/simpanpsn', [Pemesanan::class, 'SimpanPsn'])->name('simpan-psn');
Route::any('/insertreservasi', [Pemesanan::class,'create']);
Route::any('/insertpesanan', [Pemesanan::class,'create1']);
// Route::get('/insertpesan', [Pemesanan::class,'create']);

// Route::post('/simpann', [Pemesanan::class,'simpan'])->name('simpann');

// Route::get('/pemesanan', [Pemesanan::class, 'pemesanan'])->name('pemesanan');
Route::any('deletemenu/{id}', [SMenuMkn::class, 'deletemenu'])->name('deletemenu');
Route::any('deleteuser{id}', [Karyawan::class, 'deleteuser'])->name('deleteuser');

//edit
Route::any('editmenu/{id}', [SMenuMkn::class, 'editmenu'])->name('editmenu');
Route::any('updatemenumkn/{id}', [SMenuMkn::class, 'updatemenu'])->name('updatemenu');

