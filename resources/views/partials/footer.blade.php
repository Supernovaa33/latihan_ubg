<footer class="bg-dark text-light pt-5 pb-4 mt-auto border-top border-secondary-subtle">
    <div class="container">
        <div class="row g-4 justify-content-between">
            {{-- Col 1: Brand & Description --}}
            <div class="col-12 col-md-5">
                <a class="text-decoration-none text-light d-flex align-items-center fw-bold fs-5 mb-2" href="{{ url('/') }}">
                    <i class="bi bi-code-slash text-primary me-2"></i>
                    <span>Latihan<span class="text-primary">Web</span></span>
                </a>
                <p class="text-secondary small mb-3" style="max-width: 360px;">
                    Website latihan praktikum Web Service dan pemrograman web dengan Laravel. Dibuat dengan antarmuka yang modern, responsif, dan mudah digunakan.
                </p>
                <div class="d-flex gap-2">
                    <a href="https://github.com" target="_blank" class="btn btn-outline-secondary btn-sm rounded-circle d-inline-flex align-items-center justify-content-center text-light" style="width: 34px; height: 34px;" title="GitHub">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="https://instagram.com" target="_blank" class="btn btn-outline-secondary btn-sm rounded-circle d-inline-flex align-items-center justify-content-center text-light" style="width: 34px; height: 34px;" title="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="btn btn-outline-secondary btn-sm rounded-circle d-inline-flex align-items-center justify-content-center text-light" style="width: 34px; height: 34px;" title="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>

            {{-- Col 2: Quick Links --}}
            <div class="col-6 col-md-3">
                <h6 class="text-white fw-bold mb-3">Navigasi Halaman</h6>
                <ul class="list-unstyled small d-flex flex-column gap-2 mb-0">
                    <li>
                        <a href="{{ url('/') }}" class="text-secondary text-decoration-none hover-primary">
                            <i class="bi bi-chevron-right me-1 small"></i> Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard') }}" class="text-secondary text-decoration-none hover-primary">
                            <i class="bi bi-chevron-right me-1 small"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/tentang') }}" class="text-secondary text-decoration-none hover-primary">
                            <i class="bi bi-chevron-right me-1 small"></i> Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/fikri') }}" class="text-secondary text-decoration-none hover-primary">
                            <i class="bi bi-chevron-right me-1 small"></i> Halaman Fikri
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Col 3: Informasi Kontak & Status --}}
            <div class="col-6 col-md-4">
                <h6 class="text-white fw-bold mb-3">Informasi Sistem</h6>
                <ul class="list-unstyled small d-flex flex-column gap-2 mb-3 text-secondary">
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <span>Status Server: <strong>Online</strong></span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-layers-fill text-primary"></i>
                        <span>Framework: Laravel {{ app()->version() }}</span>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-geo-alt-fill text-danger"></i>
                        <span>Lab Komputer / Localhost</span>
                    </li>
                </ul>
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2 py-1">
                    Praktikum Web Service
                </span>
            </div>
        </div>

        <hr class="border-secondary mt-4 mb-3">

        {{-- Bottom Copyright Bar --}}
        <div class="row align-items-center small text-secondary">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                &copy; {{ date('Y') }} <strong>Latihan Web Service</strong>. Seluruh hak cipta dilindungi.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span>Dibuat dengan <i class="bi bi-heart-fill text-danger"></i> menggunakan Laravel & Bootstrap</span>
            </div>
        </div>
    </div>
</footer>
