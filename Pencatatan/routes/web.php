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
    return view('data_pemeriksaan');
});

Route::get('/kelahiran', function () {
    return view('kelahiran');
});

Route::get('/pengguna', function () {
    return view('pengguna');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/tambahpemeriksaan', function () {
    return view('tambahpemeriksaan');
});

Route::get('/tb_pemeriksaan', function () {
    return view('tb_pemeriksaan');
});

Route::get('/tambahpengguna', function () {
    return view('tambahpengguna');
});

Route::get('/editjadwal', function () {
    return view('editjadwal');
});
