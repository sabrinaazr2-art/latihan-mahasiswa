@extends('dashboard')

@section('title', 'About - Laravel Admin')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">About</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tentang Website Ini</h6>
        </div>
        <div class="card-body">
            <p>Project <strong>Laravel Admin</strong> ini dibuat untuk latihan penerapan sistem templating Blade di Laravel.</p>
            <p class="mb-0">Layout halaman dibagi menjadi bagian <strong>Header</strong>, <strong>Sidebar</strong>, <strong>Content</strong>, dan <strong>Footer</strong> menggunakan template SB Admin 2 Bootstrap.</p>
        </div>
    </div>
@endsection