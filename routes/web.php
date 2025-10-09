<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('admin', function () {
    return view('admin.auth.login');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});
