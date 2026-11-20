<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AuthController;

// --- 1. ROUTE PUBLIK AUTENTIKASI (Modul Hal. 35) ---
Route::get('/', function () {
    // Jika sudah login, langsung diarahkan ke dashboard
    if (session('logged_in')) {
        return redirect('/dashboard');
    }
    return view('login');
});
Route::get('/login', function () {
    return redirect('/');
});
Route::post('/login', [AuthController::class, 'cek']);

// --- 2. ROUTE GROUP DIPROTEKSI MIDDLEWARE ISLOGIN (Modul Hal. 38) ---
Route::group(['middleware' => 'islogin'], function () {
    // Laman Dashboard & Templating (Hal. 13 - 18)
    Route::get('/dashboard', [DashboardController::class, 'home']);
    Route::get('/gallery', [DashboardController::class, 'gallery']);
    Route::get('/about', [DashboardController::class, 'about']);

    // CRUD Data Pegawai (Hal. 19 - 26)
    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::post('/employe/store', [EmployeController::class, 'store']);
    Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
    Route::put('/employe/{employe}', [EmployeController::class, 'update']);
    Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);

    // Alias URL
    Route::get('/create', function () { return redirect('/employe/create'); });
    Route::get('/employee', function () { return redirect('/employe'); });
    Route::get('/employee/create', function () { return redirect('/employe/create'); });
    Route::get('/pegawai', function () { return redirect('/employe'); });

    // Latihan Mahasiswa & Kalkulator
    Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/mahasiswa', function () { return redirect('/daftar/mahasiswa'); });
    Route::get('/kalkulator', [KalkulatorController::class, 'home']);
    Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);
    Route::get('/kalkulator/segitiga', [KalkulatorController::class, 'segitiga']);
    Route::post('/kalkulator/segitiga', [KalkulatorController::class, 'hitungSegitiga']);

    // Logout (Hal. 37)
    Route::get('/logout', [AuthController::class, 'logout']);
});
