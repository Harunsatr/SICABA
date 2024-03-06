<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Register | Exoria Data Store</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Buat Akun Anda</h1>
                <div class="social-icons">
                    <a href="https://google.com" class="icon">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="https://github.com" class="icon">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://facebook.com" class="icon">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
                <input type="text" name="username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                <button type="submit">Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Masuk ke Akun Anda</h1>
                <div class="social-icons">
                    <a href="https://google.com" class="icon">
                        <i class="fa-brands fa-google"></i>
                    </a>
                    <a href="https://github.com" class="icon">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://facebook.com" class="icon">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </div>
                <span>atau gunakan email Anda</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="{{ route('password.request') }}">Lupa Password ?</a>
                <button type="submit">Masuk</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali !</h1>
                    <p style="color: white;">Untuk tetap terhubung dengan kami, silakan masuk dengan informasi pribadi Anda</p>
                    <button class="hidden" id="login">
                        Masuk
                    </button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo, teman-teman</h1>
                    <p style="color: white;">Silahkan daftarkan akun Anda terlebih dahulu</p>
                    <button class="hidden" id="register">
                        Daftar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
