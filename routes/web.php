<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');
Route::view('/items', 'items.index')->name('items.index');
Route::view('/racks', 'racks.index')->name('racks.index');
Route::view('/orders', 'orders.index')->name('orders.index');
Route::view('/shipments', 'shipments.index')->name('shipments.index');
