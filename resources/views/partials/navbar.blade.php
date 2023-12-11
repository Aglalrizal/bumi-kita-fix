<nav class="navbar navbar-expand-md fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Bumi Kita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-center my-2">
                <a class="nav-link {{ Request::is('home') ? 'c-active' : ''}}" href="/home">Home</a>
                <a class="nav-link {{ Request::is('campaigns') ? 'c-active' : '' }}" href="/campaigns">Kampanye</a>
                {{-- <a class="nav-link {{ Request::is('categories') ? 'c-active' : '' }}" href="/categories">Categories</a> --}}
                <a class="nav-link {{ Request::is('lokasi') ? 'c-active' : '' }}" href="/lokasi">Lokasi</a>
            </div>
            <div class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Selamat datang, {{ auth()->user()->name }}!
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-wtf"></i> My Dashboard</a>
                        </li>
                        {{-- <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Pengaturan</a></li> --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right" onclick="confirm('are you sure?')"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <a class="nav-link text-center" href="/signup" id="signUp-btn">Sign
                    Up</a>
                <a class="nav-link text-center" href="/login" id="login-btn">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
