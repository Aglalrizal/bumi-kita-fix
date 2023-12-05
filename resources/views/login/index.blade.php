<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&family=Ubuntu+Mono&display=swap" rel="stylesheet">
    <title>Bumi Kita | Login Page</title>
</head>

<body>
    <div id="login-page" class="container-fluid h-100">
        <div class="row h-100">
            <div id="kolom-kiri" class="col-md-6 text-white vh-100">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="centered-image">
                        <img src="img/logo-bumi-kita.png" alt="Brand Logo" style="max-width: 300px;">
                    </div>
                </div>
            </div>
            <div id="kolom-kanan" class="col-md-6 vh-100">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="login-form w-75">
                        @if(session()->has('success'))
                        <div class="alert alert-success alert-dismissable fade show d-flex justify-content-between" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if(session()->has('loginFail'))
                        <div class="alert alert-danger alert-dismissable fade show d-flex justify-content-between" role="alert">
                            {{ session('loginFail') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <h2 class="mb-4 text-center fs-2">Login</h2>
                        <form action="/login" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label fs-5">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email" required autofocus value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    </p>{{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fs-5">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Password" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <p><a href="">Lupa kata sandi?</a></p>
                            <a href="\" class="btn back-to-home">Kembali ke Halaman Utama</a>
                            <div class="container-fluid d-flex justify-content-center">
                                <button type="submit" class="btn fs-5" id="login-btn">Login</button>
                            </div>
                            <p class="text-center mt-3">Dont have an account? <a href="/signup">Sign up now!</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
