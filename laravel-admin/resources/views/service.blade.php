@extends('dashboard')

@section('title', 'Service - Laravel Admin')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Service</h1>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="font-weight-bold text-primary">Pengembangan Web</h6>
                    <p class="mb-0 text-gray-700">Pembuatan website company profile dan aplikasi web berbasis Laravel.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="font-weight-bold text-success">Konsultasi IT</h6>
                    <p class="mb-0 text-gray-700">Pendampingan perencanaan sistem informasi dan manajemen infrastruktur.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <h6 class="font-weight-bold text-info">Pemeliharaan Sistem</h6>
                    <p class="mb-0 text-gray-700">Layanan perawatan berkala, backup data, dan pembaruan keamanan aplikasi.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
