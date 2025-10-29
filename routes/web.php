<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// === AUTH ROUTES ===
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// === PROTECTED ROUTES (HANYA UNTUK ADMIN YANG LOGIN) ===
Route::middleware('auth')->group(function () {
    Route::get('/', fn() => redirect()->route('dashboard'));
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/items', fn() => view('items.index'))->name('items.index');
    Route::get('/racks', fn() => view('racks.index'))->name('racks.index');
    Route::get('/orders', fn() => view('orders.index'))->name('orders.index');
    Route::get('/shipments', fn() => view('shipments.index'))->name('shipments.index');
});
