<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\InboundController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/print/rak/{rak}', [PrintController::class, 'printByRak'])->name('print.rak');
Route::get('/resi/cetak/{rak}', [ReceiptController::class, 'generateReceipt'])->name('resi.cetak');

Route::middleware('auth')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::prefix('produk')->group(function () {

        Route::get('/', [ProdukController::class, 'index'])->name('produk.index');
        Route::get('/stok', [ProdukController::class, 'stock'])->name('produk.stok');

        Route::get('/rak', [ProdukController::class, 'rak'])->name('produk.rak');

        Route::get('/keluar', [ProdukController::class, 'keluar'])->name('produk.keluar');
    });

    Route::prefix('barang-masuk')->group(function () {
        Route::get('/', [InboundController::class, 'index'])->name('barang-masuk.index'); 
        Route::post('/', [InboundController::class, 'store'])->name('barang-masuk.store');
        Route::delete('/{id}', [InboundController::class, 'destroy'])->name('barang-masuk.destroy');
    });
Route::get('/produk/masuk', function () {
    return redirect()->route('barang-masuk.index');
});
});
