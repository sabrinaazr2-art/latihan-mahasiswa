@extends('dashboard')

@section('content')
<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <h2 style="margin: 0; color: #2c3e50;">{{ $judul }}</h2>
    <a href="/employe/create" class="btn-custom btn-tambah">+ Tambah Pegawai</a>
</div>

<table class="table-crud">
    <thead>
        <tr>
            <th style="width: 50px;">ID</th>
            <th style="text-align: left; padding-left: 15px;">Nama Pegawai</th>
            <th style="text-align: left; padding-left: 15px;">Kota / Alamat</th>
            <th style="width: 100px;">Gender</th>
            <th style="width: 140px; text-align: right; padding-right: 15px;">Gaji</th>
            <th style="width: 160px;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($employes as $row)
        <tr>
            <td align="center"><strong>{{ $row->id }}</strong></td>
            <td style="padding-left: 15px;">{{ $row->nama }}</td>
            <td style="padding-left: 15px;">{{ $row->alamat }}</td>
            <td align="center">
                @if($row->gender == 'L')
                    <span class="badge-gender badge-l">Laki-laki</span>
                @else
                    <span class="badge-gender badge-p">Perempuan</span>
                @endif
            </td>
            <td style="text-align: right; padding-right: 15px; font-weight: 500;">
                Rp {{ number_format($row->gaji, 0, ',', '.') }}
            </td>
            <td align="center">
                <div class="btn-action-group">
                    <a href="/employe/edit/{{ $row->id }}" class="btn-custom btn-edit">Edit</a>
                    <form method="post" action="/employe/{{ $row->id }}" style="margin: 0;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pegawai {{ $row->nama }}?');">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn-custom btn-delete">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" align="center" style="padding: 30px; color: #7f8c8d;">
                <em>Belum ada data pegawai. Silakan klik tombol <strong>+ Tambah Pegawai</strong> di atas.</em>
            </td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
