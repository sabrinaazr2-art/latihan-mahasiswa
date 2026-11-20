@extends('dashboard')

@section('content')
<h2 style="color: #2c3e50; margin-top: 0;">{{ $judul }}</h2>

<div class="form-crud">
    <form method="post" action="/employe/{{ $employe->id }}">
        @method('put')
        @csrf
        <table>
            <tr>
                <td style="width: 100px;"><strong>ID</strong></td>
                <td><input type="text" name="id" value="{{ $employe->id }}" readonly style="background-color: #f1f5f9; cursor: not-allowed;"></td>
            </tr>
            <tr>
                <td><strong>Nama</strong></td>
                <td><input type="text" name="nama" value="{{ $employe->nama }}" required></td>
            </tr>
            <tr>
                <td><strong>Alamat</strong></td>
                <td><textarea name="alamat" rows="3" required>{{ $employe->alamat }}</textarea></td>
            </tr>
            <tr>
                <td><strong>Gender</strong></td>
                <td>
                    <select name="gender" required>
                        <option value="L" {{ $employe->gender === 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ $employe->gender === 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><strong>Gaji</strong></td>
                <td><input type="text" name="gaji" value="{{ $employe->gaji }}" required></td>
            </tr>
            <tr>
                <td></td>
                <td style="padding-top: 15px;">
                    <button type="submit" class="btn-custom btn-tambah">Update</button>
                    <a href="/employe" style="margin-left: 8px;"><button type="button" class="btn-custom btn-batal">Batal</button></a>
                </td>
            </tr>
        </table>
    </form>
</div>
@endsection
