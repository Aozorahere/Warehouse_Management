@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-100 dark:border-gray-700">
    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Total Produk</h3>
    <p class="text-3xl font-bold text-green-600 dark:text-green-400">124</p>
  </div>

  <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-100 dark:border-gray-700">
    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Barang Masuk</h3>
    <p class="text-3xl font-bold text-green-600 dark:text-green-400">350</p>
  </div>

  <div class="p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-100 dark:border-gray-700">
    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">Barang Keluar</h3>
    <p class="text-3xl font-bold text-green-600 dark:text-green-400">290</p>
  </div>
</div>

<div class="mt-10 bg-white dark:bg-gray-800 rounded-2xl shadow-md border border-gray-100 dark:border-gray-700 p-6">
  <h3 class="text-lg font-bold text-gray-700 dark:text-gray-200 mb-4">Aktivitas Terbaru</h3>
  <ul class="space-y-3 text-gray-600 dark:text-gray-400">
    <li>📦 Barang <b>Kabel Power</b> masuk ke rak A1</li>
    <li>🚛 Barang <b>Adaptor 12V</b> dikirim ke ekspedisi J&T</li>
    <li>📥 Barang <b>LED Strip</b> ditambahkan stok 50 unit</li>
  </ul>
</div>
@endsection
