<nav class="navbar navbar-expand-sm navbar-dark bg-primary ">
    <div class="container">
        <a class="navbar-brand" href="/">Bumi Kita</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ $active === 'home' ? 'c-active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ $active === 'about' ? 'c-active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ $active === 'posts' ? 'c-active' : '' }}" href="/posts">Blog</a>
                <a class="nav-link {{ $active === 'categories' ? 'c-active' : '' }}" href="/categories">Categories</a>
            </div>
            <div class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-wtf"></i> My Dashboard</a>
                        </li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Pengaturan</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                    Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <a class="nav-link {{ $active === 'signup' ? 'c-active' : '' }}" href="/signup" id="signUp-btn">Sign
                    Up</a>
                <a class="nav-link {{ $active === 'login' ? 'c-active' : '' }}" href="/login" id="login-btn">Login</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
