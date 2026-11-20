@extends('dashboard')

@section('title', 'Home - Laravel Admin')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Home</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Selamat Datang</h6>
        </div>
        <div class="card-body">
            <p>Ini adalah laman <strong>Home</strong> pada project Laravel Admin menggunakan template SB Admin 2.</p>
            <p class="mb-0">Silakan pilih menu di sidebar sebelah kiri untuk melihat halaman Product, Service, Contact, dan About.</p>
        </div>
    </div>
@endsection