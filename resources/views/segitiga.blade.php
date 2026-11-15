<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Luas Segitiga</title>
    <!-- CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/daftar/mahasiswa">Latihan Laravel</a>
            <div class="navbar-nav">
                <a class="nav-link" href="/daftar/mahasiswa">Daftar Mahasiswa</a>
                <a class="nav-link active" href="/kalkulator/segitiga">Kalkulator Segitiga</a>
            </div>
        </div>
    </nav>

    <!-- Konten Kalkulator Segitiga -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0 fw-bold text-primary">KALKULATOR LUAS SEGITIGA</h5>
                    </div>
                    <div class="card-body">
                        <form action="/kalkulator/segitiga" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Alas Segitiga (cm)</label>
                                <input type="number" step="any" name="alas" class="form-control" value="{{ $alas }}" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Tinggi Segitiga (cm)</label>
                                <input type="number" step="any" name="tinggi" class="form-control" value="{{ $tinggi }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Hitung Luas Segitiga</button>
                        </form>

                        <hr class="my-4">

                        <!-- Hasil Perhitungan (Parsing Data dari Controller) -->
                        <div class="alert alert-success mb-0 text-center">
                            <p class="mb-1 text-secondary">Rumus: ½ × Alas ({{ $alas }}) × Tinggi ({{ $tinggi }})</p>
                            <h4 class="mb-0 fw-bold">Hasil Luas = {{ $luas }} cm²</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>