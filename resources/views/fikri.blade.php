@extends('masterlayout')

@section('title', 'Halaman Fikri - Latihan Web Service')

@section('content')
<div class="container py-5">
    <div class="card border-0 shadow-sm p-4 p-md-5">
        <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-semibold mb-3 align-self-start">
            <i class="bi bi-person me-1"></i> Profil Mahasiswa / Praktikan
        </span>
        <h1 class="display-6 fw-bold mb-3">Halaman Fikri</h1>
        <p class="lead text-secondary mb-4">
            Selamat datang di halaman personal Fikri. Halaman ini juga telah terhubung dengan template master, lengkap dengan navigasi navbar dan footer.
        </p>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ url('/dashboard') }}" class="btn btn-primary px-4 py-2">
                <i class="bi bi-speedometer2 me-1"></i> Ke Dashboard
            </a>
            <a href="{{ url('/tentang') }}" class="btn btn-outline-secondary px-4 py-2">
                <i class="bi bi-info-circle me-1"></i> Ke Halaman Tentang
            </a>
            <a href="{{ url('/') }}" class="btn btn-outline-primary px-4 py-2">
                <i class="bi bi-house me-1"></i> Ke Halaman Beranda
            </a>
        </div>
    </div>
</div>
@endsection
