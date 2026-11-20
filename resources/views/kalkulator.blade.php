<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }} - Modul Laravel Hal. 11-12</title>
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
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: #fff;
            padding: 1.25rem 1.5rem;
        }
        .calc-operator {
            font-size: 1.75rem;
            font-weight: bold;
            color: #6c757d;
        }
        .calc-input {
            font-size: 1.25rem;
            text-align: center;
            font-weight: 600;
        }
        .btn-hitung {
            background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
            color: white;
            font-weight: bold;
            padding: 10px 30px;
            border: none;
            border-radius: 8px;
            transition: all 0.3s;
        }
        .btn-hitung:hover {
            opacity: 0.9;
            color: white;
            transform: translateY(-1px);
        }
        .result-badge {
            background-color: #ffe5ea;
            border-left: 5px solid #ff416c;
            border-radius: 8px;
            padding: 15px;
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
                        <a class="nav-link fw-semibold" href="/kalkulator/segitiga">
                            <i class="fa-solid fa-shapes me-1"></i> Kalkulator Segitiga (Hal. 12)
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" href="/kalkulator">
                            <i class="fa-solid fa-calculator me-1"></i> Kalkulator Perkalian (Hal. 11-12)
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Kalkulator Sederhana -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="card main-card">
                    <div class="card-header card-header-custom text-center">
                        <h4 class="mb-1 fw-bold">{{ $judul }}</h4>
                        <small class="text-white-50">Contoh Materi Modul Praktikum Framework Laravel - Halaman 11 & 12</small>
                    </div>
                    <div class="card-body p-4 text-center">
                        <form action="/kalkulator/proses" method="POST">
                            @csrf
                            <div class="row align-items-center justify-content-center g-2 my-3">
                                <div class="col-md-3 col-sm-4">
                                    <input type="number" step="any" name="angka1" class="form-control calc-input" value="{{ $angka1 }}" required>
                                    <small class="text-muted">Angka 1</small>
                                </div>
                                <div class="col-auto">
                                    <span class="calc-operator">&times;</span>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <input type="number" step="any" name="angka2" class="form-control calc-input" value="{{ $angka2 }}" required>
                                    <small class="text-muted">Angka 2</small>
                                </div>
                                <div class="col-auto">
                                    <span class="calc-operator">=</span>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <input type="text" class="form-control calc-input bg-light text-primary fw-bold" value="{{ $hasil }}" readonly>
                                    <small class="text-muted">Hasil</small>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-hitung btn-lg shadow-sm">
                                    <i class="fa-solid fa-equals me-2"></i> HITUNG
                                </button>
                            </div>
                        </form>

                        <hr class="my-4">

                        <div class="result-badge text-center">
                            <h5 class="mb-0 fw-bold text-dark">
                                Hasil Perhitungan: <span class="text-danger">{{ $angka1 }} &times; {{ $angka2 }} = {{ $hasil }}</span>
                            </h5>
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
