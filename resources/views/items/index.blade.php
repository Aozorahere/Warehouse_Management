@extends('layouts.app', ['title' => 'Data Barang'])

@section('content')
<div class="mb-4 flex justify-between items-center">
    <form>
        <input type="text" placeholder="Cari SKU / Nama Barang..." class="border rounded p-2">
        <button class="bg-indigo-600 text-white px-3 py-2 rounded">Cari</button>
    </form>
    <button class="bg-green-600 text-white px-3 py-2 rounded">+ Tambah Barang</button>
</div>

<table class="w-full border text-sm">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-2 border">SKU</th>
            <th class="p-2 border">Nama Barang</th>
            <th class="p-2 border">Rak</th>
            <th class="p-2 border">Stok</th>
            <th class="p-2 border">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="p-2 border">SKU-001</td>
            <td class="p-2 border">Kabel HDMI</td>
            <td class="p-2 border">RAK-A1</td>
            <td class="p-2 border">50</td>
            <td class="p-2 border text-center">
                <button class="text-blue-600">Edit</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
