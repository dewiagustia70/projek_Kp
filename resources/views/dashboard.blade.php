<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ABC Tailor & Textile</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard-style.css') }}">
    <!-- Link ke Font Awesome untuk ikon profil -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="profile-info">
                <!-- Ikon Profil dan Nama Admin -->
                <i class="fas fa-user-circle profile-icon"></i>
                <div class="profile-text">
                    <p class="admin-name">Admin</p>
                    <p class="admin-status">Online</p>
                </div>
            </div>
            <h2 class="sidebar-title">ABC Tailor & Textile</h2>
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('pelanggan') }}">Pelanggan</a></li>
            <li><a href="{{ route('pesanan') }}">Pesanan</a></li>
            <li><a href="{{ route('laporan') }}">Laporan</a></li>
        </ul>
        <div class="logout">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="welcome">
            <p>Selamat Datang, {{ Auth::user()->username }}</p>
        </div>

        <div class="dashboard">
            <div class="card">
                <div class="card-icon">👥</div>
                <p class="card-title">5 Pelanggan</p>
            </div>
            <div class="card">
                <div class="card-icon">🧳</div>
                <p class="card-title">5 Pesanan</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
