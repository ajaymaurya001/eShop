<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


// Public route-----------------------------------------------------------------------------------
Route::get('/admin', function(){ return view('admin.dashboard'); })->name('dashboard');

Route::get('/', function(){ return view('user.home'); })->name('home');

Route::get('/login', [AuthController::class,'showLoginForm'])->name('login-form');
Route::post('/login', [AuthController::class,'login'])->name('login');
Route::post('/registration', [AuthController::class,'registration'])->name('registration');



// Route::get('admin', [AuthController::class, 'showLoginForm'])->name('show.login.form');
// Route::post('admin', [AuthController::class, 'login'])->name('login');
// // -----------------------------------------------------------------------------------------------

// // Admin Protected Route Group--------------------------------------------------------------------
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('admin/dashboard', function () {
//         return view('admin.dashboard');
//     })->name('admin.dashboard');
//     Route::post('admin/logout', [AuthController::class, 'logout'])->name('logout');
// });
// // -----------------------------------------------------------------------------------------------

// // User Protected Route Group---------------------------------------------------------------------
// Route::middleware(['auth'])->group(function () {
//     Route::get('user/dashboard', function () {
//         // return view('user.dashboard'); 
//     })->name('user.dashboard');
// });
// -------------------------------------------------------------------------------------------------
