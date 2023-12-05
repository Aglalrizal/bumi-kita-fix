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
    <title>Sign Up Page | Bumi Kita</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div id="kolom-kiri" class="col-md-6 text-white">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="centered-image">
                        <img src="img/logo-bumi-kita.png" alt="Brand Logo" style="max-width: 300px;">
                    </div>
                </div>
            </div>
            <div id="kolom-kanan" class="col-md-6 pt-5">
                <div class="d-flex justify-content-center align-items-center h-100 ">
                    <div class="col-md-6 w-75 signUp-form">
                        <h2 class="text-center mb-4">Sign Up</h2>
                        <form action="/signup" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email"name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Enter your email" required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="text" placeholder="Enter your username" required value="{{ old('username') }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter your name" required value="{{ old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" name="dob" class="form-control @error('dob') is-invalid @enderror" id="dob" required value="{{ old('dob') }}">
                                @error('dob')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Enter your address" required value="{{ old('address') }}">
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="noHp" class="form-label">Phone Number</label>
                                <input type="tel" name="noHp" class="form-control @error('noHp') is-invalid @enderror" id="noHp" placeholder="Enter your phone number" required value="{{ old('noHp') }}">
                                @error('noHp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="account-type" class="form-label">Account Type</label>
                                <select name="account-type" class="form-select @error('account-type') is-invalid @enderror" id="account-type" required value="{{ old('account-type') }}">
                                    <option value="">Select account type</option>
                                    <option value="personal">Personal</option>
                                    <option value="community">Community</option>
                                </select>
                                @error('account-type')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" required>
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm your password" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn" id="signup-btn">Sign Up</button>
                            </div>
                        </form>
                        <a href="/" class="btn back-to-home">Kembali ke Halaman Utama</a>
                        <p class="text-center mt-3">Already have an account? <a href="/login" class="text-decoration-none" style="color: #12433F">Login here!</a></p>
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