<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;

// Jika buka alamat awal (/), langsung arahkan ke /daftar/mahasiswa
Route::get('/', function () {
    return redirect('/daftar/mahasiswa');
});

// 1. Route untuk menampilkan daftar mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// 2. Route untuk kalkulator luas segitiga (menampilkan form & memproses hitungan)
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);