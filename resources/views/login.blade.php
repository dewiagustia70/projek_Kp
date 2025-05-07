<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ABC Tailor & Textile</title>
    <!-- Menambahkan link ke file CSS di folder public -->
    <link rel="stylesheet" href="{{ asset('css/login-style.css') }}">
</head>
<body>
    <div class="login-container">
        <form class="login-form" id="loginForm" action="{{ route('login') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <!-- Kolom pertama untuk form login -->
                    <td class="login-column">
                        <!-- Logo dan Nama Perusahaan -->
                        <div class="company-info">
                            <img src="{{ asset('images/co-icon.png') }}" alt="Logo ABC Tailor & Textile" class="logo">
                            <h1 class="company-name">ABC Tailor & Textile</h1>
                        </div>

                        <h2>Halo,</h2>
                        <h2>Selamat Datang!</h2>
                        <p>Hai, selamat datang kembali ke tempat spesial-mu</p>
                        
                        <input type="text" id="username" name="username" placeholder="Username" required>
                        @error('username')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                        
                        <button type="submit" class="btn">Masuk</button>
                    </td>

                    <!-- Kolom kedua untuk gambar -->
                    <td class="image-column">
                        <img src="{{ asset('images/Rectangle2.png') }}" alt="Ilustrasi Tailor & Textile" class="login-image">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <!-- Menambahkan file JS -->
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>