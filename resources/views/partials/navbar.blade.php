<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm py-3">
    <div class="container">
        {{-- Brand / Logo --}}
        <a class="navbar-brand d-flex align-items-center fw-bold" href="{{ url('/') }}">
            <i class="bi bi-code-slash text-primary fs-4 me-2"></i>
            <span>Latihan<span class="text-primary">Web</span></span>
        </a>

        {{-- Mobile Hamburger Button --}}
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Nav Links & Actions --}}
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active fw-semibold' : '' }}" href="{{ url('/') }}">
                        <i class="bi bi-house-door me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard*') ? 'active fw-semibold' : '' }}" href="{{ url('/dashboard') }}">
                        <i class="bi bi-speedometer2 me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tentang*') || request()->is('Tentang*') ? 'active fw-semibold' : '' }}" href="{{ url('/tentang') }}">
                        <i class="bi bi-info-circle me-1"></i> Tentang
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('fikri*') ? 'active fw-semibold' : '' }}" href="{{ url('/fikri') }}">
                        <i class="bi bi-person me-1"></i> Fikri
                    </a>
                </li>
            </ul>

            {{-- Right side Search & Action --}}
            <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
                <form class="d-flex" role="search" onsubmit="event.preventDefault();">
                    <div class="input-group input-group-sm">
                        <input class="form-control bg-dark text-light border-secondary" type="search" placeholder="Cari..." aria-label="Search">
                        <button class="btn btn-outline-secondary text-light" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-sm px-3 d-flex align-items-center gap-1 shadow-sm">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Masuk</span>
                </a>
            </div>
        </div>
    </div>
</nav>
