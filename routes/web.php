<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});


Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->name('admin.dashboard')->middleware('auth');
