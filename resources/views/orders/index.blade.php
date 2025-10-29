@extends('layouts.app', ['title' => 'Data Order'])

@section('content')
<div class="mb-4 flex justify-between items-center">
    <h2 class="text-lg font-semibold">Daftar Order</h2>
    <button class="bg-green-600 text-white px-3 py-2 rounded">+ Tambah Order</button>
</div>

<table class="w-full border text-sm">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-2 border">Kode Order</th>
            <th class="p-2 border">Tanggal</th>
            <th class="p-2 border">Jumlah Barang</th>
            <th class="p-2 border">Status</th>
            <th class="p-2 border">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="p-2 border">ORD-20251028-01</td>
            <td class="p-2 border">28 Okt 2025</td>
            <td class="p-2 border">5 Barang</td>
            <td class="p-2 border text-yellow-600">Menunggu Sortir</td>
            <td class="p-2 border text-center">
                <button class="text-blue-600">Detail</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
