@extends('dashboard')

@section('content')
<h1>{{ $judul }}</h1>

<div style="margin-bottom: 15px;">
    <a href="/employe/create"><button>+ Tambah Pegawai</button></a>
</div>

<table border="1" align="center" width="100%" cellpadding="6" cellspacing="0">
    <tr bgcolor="#f0f0f0">
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Gender</th>
        <th>Gaji</th>
        <th>Aksi</th>
    </tr>
    @forelse ($employes as $row)
    <tr align="center">
        <td>{{ $row->id }}</td>
        <td>{{ $row->nama }}</td>
        <td>{{ $row->alamat }}</td>
        <td>{{ $row->gender }}</td>
        <td>{{ $row->gaji }}</td>
        <td>
            <a href="/employe/edit/{{ $row->id }}"><button type="button">Edit</button></a> |
            <form method="post" action="/employe/{{ $row->id }}" style="display: inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                @method('delete')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="6" align="center">Belum ada data pegawai. Silakan klik Tambah Pegawai.</td>
    </tr>
    @endforelse
</table>
@endsection
