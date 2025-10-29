@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="space-y-10">

    {{-- === Header Section === --}}
    <div class="bg-gradient-to-r from-[#00FF4D] to-[#D1F0DB] text-gray-800 p-6 rounded-2xl shadow-md">
        <h1 class="text-3xl font-bold">👋 Selamat Datang di <span class="text-gray-900">WMS AMSAN</span></h1>
        <p class="text-sm text-gray-700 mt-2">Pantau stok, rak, dan pengiriman barang dengan cepat dan efisien.</p>
    </div>

    {{-- === Statistik Ringkas === --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @php
            $cards = [
                ['title' => 'Total Barang', 'value' => 120, 'icon' => '📦', 'color' => 'from-[#00FF4D] to-[#A6F6C8]'],
                ['title' => 'Total Rak', 'value' => 15, 'icon' => '🗄️', 'color' => 'from-[#00FF4D] to-[#C5F8DC]'],
                ['title' => 'Order Aktif', 'value' => 7, 'icon' => '🧾', 'color' => 'from-[#A6F6C8] to-[#00FF4D]'],
                ['title' => 'Sedang Dikirim', 'value' => 3, 'icon' => '🚚', 'color' => 'from-[#D1F0DB] to-[#00FF4D]'],
            ];
        @endphp

        @foreach ($cards as $card)
            <div class="rounded-2xl bg-gradient-to-br {{ $card['color'] }} shadow-lg text-gray-800 hover:scale-105 transition transform p-6 flex flex-col justify-between">
                <div class="flex justify-between items-center mb-4">
                    <div class="text-5xl">{{ $card['icon'] }}</div>
                    <div class="text-right">
                        <p class="text-sm font-semibold uppercase text-gray-700">{{ $card['title'] }}</p>
                        <p class="text-4xl font-extrabold text-gray-900">{{ $card['value'] }}</p>
                    </div>
                </div>
                <div class="mt-3 text-sm text-gray-600">📈 Terupdate hari ini</div>
            </div>
        @endforeach
    </div>

    {{-- === Barang Stok Rendah === --}}
    <div class="bg-white border-l-8 border-[#00FF4D] rounded-2xl shadow-md p-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-xl font-bold text-gray-700 flex items-center gap-2">
                <span class="text-[#00FF4D] text-2xl">⚠️</span> Barang Stok Rendah
            </h2>
            <button class="px-4 py-2 bg-[#00FF4D] hover:bg-green-500 text-white text-sm rounded-lg shadow transition">
                Lihat Semua
            </button>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm border border-[#D1F0DB] rounded-lg overflow-hidden">
                <thead class="bg-[#D1F0DB] text-gray-700 uppercase text-xs font-semibold">
                    <tr>
                        <th class="px-4 py-3">SKU</th>
                        <th class="px-4 py-3">Nama Barang</th>
                        <th class="px-4 py-3">Rak</th>
                        <th class="px-4 py-3">Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white hover:bg-[#F4FFF8] transition">
                        <td class="px-4 py-2 border-t border-[#D1F0DB] font-semibold text-gray-700">ABC-001</td>
                        <td class="px-4 py-2 border-t border-[#D1F0DB]">Adaptor 12V</td>
                        <td class="px-4 py-2 border-t border-[#D1F0DB]">RAK-A1</td>
                        <td class="px-4 py-2 border-t border-[#D1F0DB] text-red-600 font-bold">4</td>
                    </tr>
                    <tr class="bg-white hover:bg-[#F4FFF8] transition">
                        <td class="px-4 py-2 border-t border-[#D1F0DB] font-semibold text-gray-700">XYZ-002</td>
                        <td class="px-4 py-2 border-t border-[#D1F0DB]">Kabel Data Type-C</td>
                        <td class="px-4 py-2 border-t border-[#D1F0DB]">RAK-B2</td>
                        <td class="px-4 py-2 border-t border-[#D1F0DB] text-red-600 font-bold">3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
