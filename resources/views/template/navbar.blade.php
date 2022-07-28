<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/siswa">E - PPDB </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                @if (!Auth::guest())
                    <li class="nav-item">
                        <span class="nav-link active fw-bold ms-2">Halo {{ Auth::user()->name }} !</span>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'dashboard' ? 'active' : '' }}" href="/siswa">Data Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $page == 'register' ? 'active' : '' }}" href="/register">Daftar Siswa Baru</a>
                </li>
                <li class="nav-item">
                    @if (Auth::guest())
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    @else
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    @endif
                </li>

            </ul>
        </div>
    </div>

</nav>
