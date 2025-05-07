<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Halaman login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Halaman dashboard setelah login
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Halaman logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
?>
