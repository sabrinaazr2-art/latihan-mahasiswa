@extends('dashboard')

@section('content')
<h1>{{ $judul }}</h1>

<form method="post" action="/employe/store">
    @csrf
    <table border="0" align="center" cellpadding="5">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" required></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="2" cols="25" required></textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="text" name="gaji" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>
@endsection
