<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});

// Menampilkan halaman login (GET request)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');

// Menangani proses login (POST request)
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Menampilkan dashboard setelah login (GET request)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

?>
