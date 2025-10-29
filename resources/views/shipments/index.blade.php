@extends('layouts.app', ['title' => 'Data Pengiriman'])

@section('content')
<div class="mb-4 flex justify-between items-center">
    <h2 class="text-lg font-semibold">Daftar Pengiriman</h2>
    <button class="bg-green-600 text-white px-3 py-2 rounded">+ Tambah Pengiriman</button>
</div>

<table class="w-full border text-sm">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-2 border">Kode Order</th>
            <th class="p-2 border">Ekspedisi</th>
            <th class="p-2 border">Nomor Resi</th>
            <th class="p-2 border">Status</th>
            <th class="p-2 border">Tanggal Kirim</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="p-2 border">ORD-20251028-01</td>
            <td class="p-2 border">J&T Express</td>
            <td class="p-2 border">JT123456789ID</td>
            <td class="p-2 border text-green-600">Terkirim</td>
            <td class="p-2 border">28 Okt 2025</td>
        </tr>
    </tbody>
</table>
@endsection
