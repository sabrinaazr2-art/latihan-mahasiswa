<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function segitiga()
    {
        // Menampilkan halaman kalkulator dengan nilai awal (alas = 10, tinggi = 5)
        $alas = 10;
        $tinggi = 5;
        $luas = 0.5 * $alas * $tinggi;

        return view('segitiga', [
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' => $luas
        ]);
    }

    public function hitungSegitiga(Request $request)
    {
        // Mengambil angka yang diketik pengguna lalu menghitung luasnya
        $alas = $request->input('alas');
        $tinggi = $request->input('tinggi');
        $luas = 0.5 * $alas * $tinggi;

        return view('segitiga', [
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' => $luas
        ]);
    }
}