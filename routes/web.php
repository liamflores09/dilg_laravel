<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\RegistrationController;

Route::get('/register', [RegistrationController::class, 'showForm'])->name('register.form');
Route::post('/register', [RegistrationController::class, 'handleFormSubmission'])->name('register.submit');

// Admin
Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Admin Dashboard Route
Route::get('admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard');

// Admin Login Route
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminLoginController::class, 'login']);

// Admin Logout Route
Route::get('admin/logout', function () {
    session()->forget('admin_id');
    return redirect()->route('admin.login');
})->name('admin.logout');

Route::get('/admin/dashboard', [RegistrationController::class, 'showRegistrations'])->name('admin.dashboard');

