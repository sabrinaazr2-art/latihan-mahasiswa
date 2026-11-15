<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/daftar/mahasiswa">Latihan Laravel</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="/daftar/mahasiswa">Daftar Mahasiswa</a>
                <a class="nav-link" href="/kalkulator/segitiga">Kalkulator Segitiga</a>
            </div>
        </div>
    </nav>

    <!-- Konten Tabel Daftar Mahasiswa -->
    <div class="container">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0 fw-bold text-primary">DAFTAR MAHASISWA</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover mb-0 text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $mhs)
                        <tr>
                            <td class="fw-semibold">{{ $mhs['nama'] }}</td>
                            <td>{{ $mhs['alamat'] }}</td>
                            <td>
                                <span class="badge {{ $mhs['gender'] == 'L' ? 'bg-info text-dark' : 'bg-warning text-dark' }}">
                                    {{ $mhs['gender'] }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>