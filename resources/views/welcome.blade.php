@extends('masterlayout')

@section('title', 'Selamat Datang - Latihan Web Service')

@section('content')
<div class="container py-5">
    {{-- Hero Section --}}
    <div class="row align-items-center mb-5">
        <div class="col-lg-7">
            <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill fw-semibold mb-3">
                <i class="bi bi-code-slash me-1"></i> Praktikum Laravel Blade
            </span>
            <h1 class="display-5 fw-bold text-dark mb-3">
                Selamat Datang di Website <span class="text-primary">Latihan Web</span>
            </h1>
            <p class="lead text-secondary mb-4">
                Ini adalah halaman utama (Welcome) yang dibangun menggunakan Blade Templating Laravel, terintegrasi secara otomatis dengan Navbar dan Footer dari Master Layout.
            </p>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg px-4 shadow-sm">
                    <i class="bi bi-speedometer2 me-1"></i> Buka Dashboard
                </a>
                <a href="{{ url('/tentang') }}" class="btn btn-outline-secondary btn-lg px-4">
                    <i class="bi bi-info-circle me-1"></i> Tentang Kami
                </a>
                <a href="{{ url('/fikri') }}" class="btn btn-outline-primary btn-lg px-4">
                    <i class="bi bi-person me-1"></i> Halaman Fikri
                </a>
            </div>
        </div>
        <div class="col-lg-5 text-center mt-4 mt-lg-0">
            <div class="p-4 bg-white rounded-4 shadow-sm border text-center">
                <div class="display-1 text-primary mb-3">
                    <i class="bi bi-laptop"></i>
                </div>
                <h5 class="fw-bold">Modular & Responsif</h5>
                <p class="text-secondary small mb-0">
                    Setiap halaman menggunakan komponen yang sama untuk navigasi dan footer, sehingga kode lebih rapi dan terstruktur.
                </p>
            </div>
        </div>
    </div>

    {{-- Content Section (Text asli pengguna) --}}
    <div class="card border-0 shadow-sm p-4 p-md-5">
        <h3 class="fw-bold mb-3">Konten Halaman</h3>
        <p class="text-muted lh-lg mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci commodi officiis voluptatum cumque molestiae?
            Magni, vitae magnam mollitia adipisci sapiente quaerat est molestias placeat doloribus perferendis in minima
            reprehenderit sint. Recusandae, quis. Sapiente ea placeat excepturi eligendi tenetur! Soluta suscipit commodi
            consectetur aspernatur praesentium, iure velit labore beatae officiis accusantium quas exercitationem autem libero
            assumenda obcaecati asperiores reprehenderit eveniet non ad. Nam voluptates adipisci dolore consequuntur incidunt
            reprehenderit aperiam reiciendis ipsa perferendis tempore sapiente temporibus nesciunt harum autem, exercitationem
            eius beatae pariatur maiores iste rem nemo amet quas modi illum. Maxime, consequatur eum quis eius, excepturi quo
            vel necessitatibus dolores aliquam, illum suscipit tempore.
        </p>
    </div>
</div>
@endsection
