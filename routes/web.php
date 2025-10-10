<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');



// Login Auth routes ------------------
Route::get('admin', [AuthController::class,'showLoginForm'])->name('show.login.form');
Route::post('admin', [AuthController::class,'login'])->name('login');


// --- ADD THIS PROTECTED ROUTE GROUP ---
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    Route::post('admin/logout', [AuthController::class, 'logout'])->name('logout'); 

});
// ------------------------------------





