@extends('dashboard')

@section('content')
<h2 style="color: #2c3e50; margin-top: 0;">{{ $judul }}</h2>

<div class="form-crud">
    <form method="post" action="/employe/store">
        @csrf
        <table>
            <tr>
                <td style="width: 100px;"><strong>ID</strong></td>
                <td><input type="text" name="id" placeholder="Masukkan ID (angka)" required></td>
            </tr>
            <tr>
                <td><strong>Nama</strong></td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap Pegawai" required></td>
            </tr>
            <tr>
                <td><strong>Alamat</strong></td>
                <td><textarea name="alamat" rows="3" placeholder="Alamat atau Kota Domisili" required></textarea></td>
            </tr>
            <tr>
                <td><strong>Gender</strong></td>
                <td>
                    <select name="gender" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><strong>Gaji</strong></td>
                <td><input type="text" name="gaji" placeholder="Contoh: 2500000" required></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-top: 15px;">
                    <button type="submit" class="btn-custom btn-tambah">SIMPAN</button>
                    <a href="/employe" style="margin-left: 8px;"><button type="button" class="btn-custom btn-batal">Batal</button></a>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
