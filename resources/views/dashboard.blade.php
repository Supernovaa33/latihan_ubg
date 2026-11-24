@extends('masterlayout')

@section('title', 'Dashboard - Latihan Web Service')

@section('content')
<div class="container py-4 py-lg-5">
    {{-- Header Banner / Salam Pembuka --}}
    <div class="card bg-primary text-white border-0 shadow-sm p-4 p-md-5 mb-4 position-relative overflow-hidden">
        <div class="position-relative z-1">
            <span class="badge bg-white text-primary mb-2 fw-semibold px-3 py-2 rounded-pill">
                <i class="bi bi-stars me-1"></i> Dashboard Pengguna
            </span>
            <h1 class="display-6 fw-bold mb-2">Selamat Datang di Halaman Dashboard! 👋</h1>
            <p class="lead mb-4 text-white-50" style="max-width: 650px;">
                Ini adalah halaman dashboard yang telah terhubung dengan template master, dilengkapi navbar navigasi di bagian atas dan footer di bagian bawah.
            </p>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ url('/') }}" class="btn btn-light fw-semibold text-primary px-4 py-2">
                    <i class="bi bi-house me-1"></i> Halaman Beranda
                </a>
                <a href="{{ url('/tentang') }}" class="btn btn-outline-light px-4 py-2">
                    <i class="bi bi-info-circle me-1"></i> Tentang Aplikasi
                </a>
            </div>
        </div>
        {{-- Background decorative icon --}}
        <i class="bi bi-speedometer2 position-absolute text-white opacity-25" style="font-size: 14rem; right: -2rem; bottom: -3rem;"></i>
    </div>

    {{-- Statistik / Ringkasan Data --}}
    <div class="row g-3 mb-4">
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-secondary small fw-medium">Total Layanan</span>
                    <span class="badge bg-primary-subtle text-primary p-2 rounded-3">
                        <i class="bi bi-hdd-network fs-5"></i>
                    </span>
                </div>
                <h3 class="fw-bold mb-1">12</h3>
                <small class="text-success"><i class="bi bi-arrow-up-right me-1"></i> +2 layanan baru</small>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-secondary small fw-medium">Endpoint API</span>
                    <span class="badge bg-success-subtle text-success p-2 rounded-3">
                        <i class="bi bi-diagram-3 fs-5"></i>
                    </span>
                </div>
                <h3 class="fw-bold mb-1">28</h3>
                <small class="text-secondary"><i class="bi bi-check-circle me-1"></i> 100% aktif</small>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-secondary small fw-medium">Pengguna Terdaftar</span>
                    <span class="badge bg-warning-subtle text-warning p-2 rounded-3">
                        <i class="bi bi-people fs-5"></i>
                    </span>
                </div>
                <h3 class="fw-bold mb-1">1,420</h3>
                <small class="text-success"><i class="bi bi-arrow-up-right me-1"></i> +12% minggu ini</small>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3">
            <div class="card border-0 shadow-sm h-100 p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-secondary small fw-medium">Status Server</span>
                    <span class="badge bg-info-subtle text-info p-2 rounded-3">
                        <i class="bi bi-cpu fs-5"></i>
                    </span>
                </div>
                <h3 class="fw-bold mb-1 text-success">Normal</h3>
                <small class="text-secondary"><i class="bi bi-clock-history me-1"></i> Uptime 99.9%</small>
            </div>
        </div>
    </div>

    {{-- Content Table & Info Grid --}}
    <div class="row g-4">
        {{-- Daftar Rute / Halaman --}}
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm p-4 h-100">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h5 class="fw-bold mb-0">Daftar Halaman Praktikum</h5>
                    <span class="badge bg-secondary-subtle text-secondary">Rute Tersedia</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Halaman</th>
                                <th>URL Rute</th>
                                <th>Status</th>
                                <th class="text-end">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="fw-semibold">
                                    <i class="bi bi-house-door text-primary me-2"></i> Beranda (Welcome)
                                </td>
                                <td><code>/</code></td>
                                <td><span class="badge bg-success-subtle text-success">Tersedia</span></td>
                                <td class="text-end">
                                    <a href="{{ url('/') }}" class="btn btn-sm btn-outline-primary">Buka</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">
                                    <i class="bi bi-speedometer2 text-primary me-2"></i> Dashboard
                                </td>
                                <td><code>/dashboard</code></td>
                                <td><span class="badge bg-primary-subtle text-primary">Sedang Dibuka</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-secondary" disabled>Aktif</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">
                                    <i class="bi bi-info-circle text-primary me-2"></i> Tentang
                                </td>
                                <td><code>/tentang</code></td>
                                <td><span class="badge bg-success-subtle text-success">Tersedia</span></td>
                                <td class="text-end">
                                    <a href="{{ url('/tentang') }}" class="btn btn-sm btn-outline-primary">Buka</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-semibold">
                                    <i class="bi bi-person text-primary me-2"></i> Halaman Fikri
                                </td>
                                <td><code>/fikri</code></td>
                                <td><span class="badge bg-success-subtle text-success">Tersedia</span></td>
                                <td class="text-end">
                                    <a href="{{ url('/fikri') }}" class="btn btn-sm btn-outline-primary">Buka</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Side Info / Petunjuk Template --}}
        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm p-4 h-100">
                <h5 class="fw-bold mb-3">Struktur Layout Blade</h5>
                <p class="text-secondary small mb-3">
                    Halaman ini menggunakan arsitektur modular Blade template Laravel:
                </p>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item px-0 py-2 d-flex align-items-center">
                        <i class="bi bi-check2-circle text-success fs-5 me-2"></i>
                        <div>
                            <strong>masterlayout.blade.php</strong>
                            <div class="text-muted">Template kerangka dasar utama</div>
                        </div>
                    </li>
                    <li class="list-group-item px-0 py-2 d-flex align-items-center">
                        <i class="bi bi-check2-circle text-success fs-5 me-2"></i>
                        <div>
                            <strong>partials/navbar.blade.php</strong>
                            <div class="text-muted">Menu navigasi atas responsif</div>
                        </div>
                    </li>
                    <li class="list-group-item px-0 py-2 d-flex align-items-center">
                        <i class="bi bi-check2-circle text-success fs-5 me-2"></i>
                        <div>
                            <strong>partials/footer.blade.php</strong>
                            <div class="text-muted">Informasi footer dan hak cipta</div>
                        </div>
                    </li>
                    <li class="list-group-item px-0 py-2 d-flex align-items-center">
                        <i class="bi bi-check2-circle text-success fs-5 me-2"></i>
                        <div>
                            <strong>dashboard.blade.php</strong>
                            <div class="text-muted">Mengisi <code>@yield('content')</code></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
