@extends('dashboard')

@section('content')
<h1>{{ $judul }}</h1>

<form method="post" action="/employe/{{ $employe->id }}">
    @method('put')
    @csrf
    <table border="0" align="center" cellpadding="5">
        <tr>
            <td>ID</td>
            <td><input type="text" name="id" value="{{ $employe->id }}" readonly style="background-color: #eee;"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="{{ $employe->nama }}" required></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" rows="2" cols="25" required>{{ $employe->alamat }}</textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="gender" required>
                    <option value="L" {{ $employe->gender === 'L' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="P" {{ $employe->gender === 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gaji</td>
            <td><input type="text" name="gaji" value="{{ $employe->gaji }}" required></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Update</button>
                <a href="/employe" style="margin-left: 10px;"><button type="button">Batal</button></a>
            </td>
        </tr>
    </table>
</form>
@endsection
