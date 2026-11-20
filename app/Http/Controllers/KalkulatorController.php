<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // --- Materi Modul Halaman 10 - 12: Kalkulator Sederhana (Perkalian) ---
    public function home()
    {
        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = 0;
        $data['angka2'] = 0;
        $data['hasil'] = 0;

        return view('kalkulator', $data);
    }

    public function proses(Request $request)
    {
        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = $request->input('angka1', 0);
        $data['angka2'] = $request->input('angka2', 0);
        $data['hasil'] = $data['angka1'] * $data['angka2'];

        return view('kalkulator', $data);
    }

    // --- Latihan Modul Halaman 12 No. 3: Kalkulator Luas Segitiga ---
    public function segitiga()
    {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = 0;
        $data['tinggi'] = 0;
        $data['luas'] = 0;

        return view('segitiga', $data);
    }

    public function hitungSegitiga(Request $request)
    {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = $request->input('alas', 0);
        $data['tinggi'] = $request->input('tinggi', 0);
        $data['luas'] = 0.5 * $data['alas'] * $data['tinggi'];

        return view('segitiga', $data);
    }
}
