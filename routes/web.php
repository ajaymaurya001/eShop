<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {  return view('welcome');})->name('home');

// Public route-----------------------------------------------------------------------------------
Route::get('/', function(){ return view('home'); })->name('homepage');
Route::get('admin', [AuthController::class, 'showLoginForm'])->name('show.login.form');
Route::post('admin', [AuthController::class, 'login'])->name('login');
// -----------------------------------------------------------------------------------------------

// Admin Protected Route Group--------------------------------------------------------------------
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::post('admin/logout', [AuthController::class, 'logout'])->name('logout');
});
// -----------------------------------------------------------------------------------------------

// User Protected Route Group---------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {
    Route::get('user/dashboard', function () {
        return view('user.dashboard'); // Create this view
    })->name('user.dashboard');
});
// -------------------------------------------------------------------------------------------------
