<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');


Route::name('admin.')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('roles', RoleController::class);
});
