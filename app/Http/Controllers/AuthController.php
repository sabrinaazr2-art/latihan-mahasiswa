<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Fungsi untuk login (Modul Hal. 35-36)
    public function cek(Request $request)
    {
        // Mencari data email di tabel users
        $data = User::where('email', $request->email)->first();

        // Jika datanya ketemu
        if ($data) {
            // Cek apakah password sama menggunakan Hash::check
            if (Hash::check($request->password, $data->password)) {
                // Simpan session
                session(['email' => $request->email]);
                session(['logged_in' => true]);

                // Masuk ke dashboard
                return redirect('/dashboard');
            } else {
                // Password salah, kembali ke login
                return redirect('/');
            }
        } else {
            // Email tidak ditemukan, kembali ke login
            return redirect('/');
        }
    }

    // Fungsi untuk logout (Modul Hal. 37)
    public function logout(Request $request)
    {
        // Hapus semua session
        $request->session()->flush();

        // Kembali ke login
        return redirect('/');
    }
}
