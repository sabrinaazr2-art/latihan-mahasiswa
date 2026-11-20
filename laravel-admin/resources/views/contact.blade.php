@extends('dashboard')

@section('title', 'Contact - Laravel Admin')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Contact</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Hubungi Kami</h6>
        </div>
        <div class="card-body">
            <p><strong>Email:</strong> admin@laravel-admin.test</p>
            <p><strong>Telepon:</strong> (031) 1234-5678</p>
            <p><strong>Alamat:</strong> Jl. Pendidikan No. 10, Jawa Timur</p>

            <hr>

            <form>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                </div>
                <div class="form-group">
                    <label>Pesan</label>
                    <textarea class="form-control" rows="3" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="button" class="btn btn-primary">Kirim Pesan</button>
            </form>
        </div>
    </div>
@endsection