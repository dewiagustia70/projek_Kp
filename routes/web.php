<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

// Menampilkan halaman login (GET request)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// Menangani proses login (POST request)
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route yang dilindungi oleh middleware auth
Route::middleware(['auth'])->group(function () {
    // Menampilkan dashboard setelah login (GET request)
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    // Route untuk pelanggan
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
});
?>
