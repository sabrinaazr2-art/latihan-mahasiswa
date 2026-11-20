@extends('dashboard')

@section('content')
<h1>{{ $judul }}</h1>

<table border="1" align="center" width="100%" cellpadding="8" cellspacing="0">
    <tr bgcolor="#f0f0f0" align="center">
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
    </tr>
    @foreach ($mahasiswa as $row)
    <tr align="center">
        <td>{{ $row['nama'] }}</td>
        <td>{{ $row['alamat'] }}</td>
        <td>{{ $row['gender'] }}</td>
    </tr>
    @endforeach
</table>
@endsection
