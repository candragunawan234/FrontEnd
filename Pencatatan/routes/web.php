<?php

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pemeriksaan', function () {
    return view('pemeriksaan/data_pemeriksaan');
});

Route::get('/kelahiran', function () {
    return view('kelahiran/data_kelahiran');
});

Route::get('/tambahkelahiran', function () {
    return view('kelahiran/tambahkelahiran');
});

Route::get('/editkelahiran', function () {
    return view('kelahiran/editdatakelahiran');
});

Route::get('/2', function () {
    return view('kelahiran/2');
});

Route::get('/3', function () {
    return view('kelahiran/3');

});
Route::get('/4', function () {
    return view('kelahiran/4');
});


Route::get('/tb_kelahiran', function () {
    return view('kelahiran/tb_kelahiran');
});

Route::get('/pengguna', function () {
    return view('pengguna/pengguna');
});

Route::get('/tambahpengguna', function () {
    return view('pengguna/tambahpengguna');
});

Route::get('/editdatapengguna', function () {
    return view('pengguna/editdatapengguna');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/tambahpemeriksaan', function () {
    return view('pemeriksaan/tambahpemeriksaan');
});

Route::get('/tb_pemeriksaan', function () {
    return view('pemeriksaan/tb_pemeriksaan');
});

Route::get('/editjadwal', function () {
    return view('editjadwal');
});

Route::get('/editpemeriksaan', function () {
    return view('pemeriksaan/editDataPemeriksaan');
});