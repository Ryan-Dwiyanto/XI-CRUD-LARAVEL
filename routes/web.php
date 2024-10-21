<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\WilayahController;

// Route untuk halaman utama (home)
Route::get('/', function () {
    return view('home'); // Anda bisa membuat halaman welcome.blade.php untuk tampilan awal
});

// Route untuk Siswa
Route::resource('siswa', SiswaController::class);

// Route untuk Guru
Route::resource('guru', GuruController::class);

// Route untuk Rayon
Route::resource('rayon', RayonController::class);

// Route untuk Wilayah
Route::resource('wilayah', WilayahController::class);
