@extends('dashboard')

@section('title', 'Product - Laravel Admin')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Product</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Produk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Laptop Pro 14</td>
                            <td>Elektronik</td>
                            <td>Rp 12.500.000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Mouse Wireless</td>
                            <td>Aksesoris</td>
                            <td>Rp 250.000</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Keyboard Mechanical</td>
                            <td>Aksesoris</td>
                            <td>Rp 650.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection