@extends('masterlayout')

@section('title', 'Tentang Kami - Latihan Web Service')

@section('content')
<div class="container py-5">
    <div class="card border-0 shadow-sm p-4 p-md-5 mb-4">
        <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-semibold mb-3 align-self-start">
            <i class="bi bi-info-circle me-1"></i> Profil Singkat
        </span>
        <h1 class="display-6 fw-bold mb-3">Ini Adalah Halaman Tentang</h1>
        <p class="lead text-secondary mb-4">
            Halaman ini mendemonstrasikan bagaimana sebuah halaman di Laravel mewarisi navbar dan footer secara otomatis dari <code>masterlayout.blade.php</code>.
        </p>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ url('/dashboard') }}" class="btn btn-primary px-4 py-2">
                <i class="bi bi-speedometer2 me-1"></i> Buka Dashboard
            </a>
            <a href="{{ url('/') }}" class="btn btn-outline-secondary px-4 py-2">
                <i class="bi bi-house me-1"></i> Halaman Beranda
            </a>
            <a href="{{ url('/fikri') }}" class="btn btn-outline-primary px-4 py-2">
                <i class="bi bi-person me-1"></i> Halaman Fikri
            </a>
        </div>
    </div>
</div>
@endsection
