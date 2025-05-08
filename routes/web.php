<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');


Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard')->middleware('auth');
