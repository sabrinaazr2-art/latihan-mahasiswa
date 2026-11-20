<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;

// 1. Halaman utama otomatis mengarahkan ke CRUD Pegawai (/employe)
Route::get('/', function () {
    return redirect('/employe');
});

// 2. CRUD Data Pegawai (Modul Halaman 19 - 26 Lengkap)
Route::get('/employe', [EmployeController::class, 'index']);                  // READ
Route::get('/employe/create', [EmployeController::class, 'create']);          // CREATE (Form)
Route::post('/employe/store', [EmployeController::class, 'store']);           // CREATE (Simpan)
Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);    // UPDATE (Form)
Route::put('/employe/{employe}', [EmployeController::class, 'update']);       // UPDATE (Simpan)
Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);   // DELETE (Hapus)

// 3. Alias / Toleransi Typo untuk CRUD Pegawai
Route::get('/create', function () {
    return redirect('/employe/create');
});
Route::get('/employee', function () {
    return redirect('/employe');
});
Route::get('/employee/create', function () {
    return redirect('/employe/create');
});
Route::get('/pegawai', function () {
    return redirect('/employe');
});
Route::get('/pegawai/create', function () {
    return redirect('/employe/create');
});
Route::get('/tambah', function () {
    return redirect('/employe/create');
});
Route::get('/tambah_data', function () {
    return redirect('/employe/create');
});
Route::get('/tambah-data', function () {
    return redirect('/employe/create');
});

// 4. Latihan Halaman 12 No. 2: Route Daftar Mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswa', function () {
    return redirect('/daftar/mahasiswa');
});

// 5. Materi Halaman 11-12: Route Kalkulator Sederhana (Perkalian)
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);

// 6. Latihan Halaman 12 No. 3: Route Kalkulator Luas Segitiga
Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);

// 7. Sistem Templating (Halaman 13-18)
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);
Route::get('/about', [DashboardController::class, 'about']);
