@extends('layouts.app', ['title' => 'Dashboard'])

@section('content')
<div class="grid grid-cols-4 gap-4">
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-gray-600">Total Barang</h2>
        <p class="text-3xl font-bold text-indigo-600">120</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-gray-600">Total Rak</h2>
        <p class="text-3xl font-bold text-indigo-600">15</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-gray-600">Order Aktif</h2>
        <p class="text-3xl font-bold text-indigo-600">7</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h2 class="text-gray-600">Sedang Dikirim</h2>
        <p class="text-3xl font-bold text-indigo-600">3</p>
    </div>
</div>

<div class="mt-6 bg-white p-4 rounded shadow">
    <h2 class="text-lg font-semibold mb-2">Barang Stok Rendah</h2>
    <table class="w-full border text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">SKU</th>
                <th class="p-2 border">Nama Barang</th>
                <th class="p-2 border">Rak</th>
                <th class="p-2 border">Stok</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="p-2 border">ABC-001</td>
                <td class="p-2 border">Adaptor 12V</td>
                <td class="p-2 border">RAK-A1</td>
                <td class="p-2 border text-red-600 font-bold">4</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
