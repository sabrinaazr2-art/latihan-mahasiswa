<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // 1. READ: Menampilkan semua data pegawai (Modul Halaman 21)
    public function index()
    {
        $data['judul'] = 'CRUD data Pegawai';
        $data['employes'] = Employe::all();
        return view('tampil_data', $data);
    }

    // 2. CREATE (SIMPAN DATA): Menampilkan form tambah data (Modul Halaman 22)
    public function create()
    {
        $data['judul'] = 'Tambah data Pegawai';
        return view('tambah_data', $data);
    }

    // 2. CREATE (SIMPAN DATA): Menyimpan data form ke database (Modul Halaman 22-23)
    public function store(Request $request)
    {
        // Ambil data di form
        $employe = new Employe;
        if ($request->filled('id')) {
            $existing = Employe::find($request->id);
            if ($existing) {
                $employe = $existing;
            } else {
                $employe->id = $request->id;
            }
        }
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;

        // Simpan dalam database
        $employe->save();

        // Jika berhasil kembali ke tampil data
        return redirect('/employe');
    }

    // 3. UPDATE: Menampilkan form edit data (Modul Halaman 24)
    public function show(Employe $employe)
    {
        $data['judul'] = 'Edit data Pegawai';
        $data['employe'] = $employe;
        return view('edit_data', $data);
    }

    // 3. UPDATE: Mengubah data di database (Modul Halaman 24)
    public function update(Request $request, Employe $employe)
    {
        $employe = Employe::find($employe->id);
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }

    // 4. DELETE: Menghapus data dari database (Modul Halaman 26)
    public function destroy(Employe $employe)
    {
        $employe = Employe::find($employe->id);
        $employe->delete();

        return redirect('/employe');
    }
}
