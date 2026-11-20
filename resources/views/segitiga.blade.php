<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }} - Modul Laravel Hal. 12</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .main-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            border: none;
        }
        .card-header-custom {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: #fff;
            padding: 1.25rem 1.5rem;
        }
        .btn-hitung {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px;
            transition: all 0.3s;
        }
        .btn-hitung:hover {
            opacity: 0.9;
            color: white;
            transform: translateY(-1px);
        }
        .result-box {
            background-color: #e8f8f5;
            border-left: 5px solid #11998e;
            border-radius: 8px;
            padding: 20px;
        }
    </style>
</head>
<body>

    <!-- Navbar Navigasi Halaman 12 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/daftar/mahasiswa">
                <i class="fa-solid fa-graduation-cap me-2 text-warning"></i>Modul Laravel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="/daftar/mahasiswa">
                            <i class="fa-solid fa-users me-1"></i> Daftar Mahasiswa (Hal. 12)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="/kalkulator/segitiga">
                            <i class="fa-solid fa-shapes me-1"></i> Kalkulator Segitiga (Hal. 12)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="/kalkulator">
                            <i class="fa-solid fa-calculator me-1"></i> Kalkulator Perkalian (Hal. 11-12)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Kalkulator Luas Segitiga -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card main-card">
                    <div class="card-header card-header-custom text-center">
                        <h4 class="mb-1 fw-bold">{{ $judul }}</h4>
                        <small class="text-white-50">Latihan Modul Praktikum Framework Laravel - Halaman 12 No. 3</small>
                    </div>
                    <div class="card-body p-4">
                        <form action="/kalkulator/segitiga" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label fw-semibold text-secondary">
                                    <i class="fa-solid fa-arrows-left-right me-1"></i> Alas Segitiga (cm)
                                </label>
                                <input type="number" step="any" name="alas" class="form-control form-control-lg" value="{{ $alas }}" placeholder="Masukkan panjang alas" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-semibold text-secondary">
                                    <i class="fa-solid fa-arrows-up-down me-1"></i> Tinggi Segitiga (cm)
                                </label>
                                <input type="number" step="any" name="tinggi" class="form-control form-control-lg" value="{{ $tinggi }}" placeholder="Masukkan tinggi segitiga" required>
                            </div>
                            <button type="submit" class="btn btn-hitung w-100 btn-lg shadow-sm">
                                <i class="fa-solid fa-calculator me-2"></i> HITUNG LUAS SEGITIGA
                            </button>
                        </form>

                        <hr class="my-4">

                        <!-- Hasil Perhitungan Luas Segitiga -->
                        <div class="result-box text-center">
                            <div class="text-muted mb-2 small">
                                <strong>Rumus Luas:</strong> &frac12; &times; Alas &times; Tinggi
                            </div>
                            <div class="text-secondary mb-2">
                                &frac12; &times; {{ $alas }} cm &times; {{ $tinggi }} cm
                            </div>
                            <h3 class="mb-0 fw-bold text-dark">
                                Luas Segitiga = <span class="text-success">{{ $luas }}</span> cm&sup2;
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
