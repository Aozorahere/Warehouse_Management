@extends('layouts.app', ['title' => 'Data Rak Gudang'])

@section('content')
<div class="mb-4 flex justify-between items-center">
    <h2 class="text-lg font-semibold">Daftar Rak</h2>
    <button class="bg-green-600 text-white px-3 py-2 rounded">+ Tambah Rak</button>
</div>

<table class="w-full border text-sm">
    <thead class="bg-gray-100">
        <tr>
            <th class="p-2 border">Kode Rak</th>
            <th class="p-2 border">Deskripsi</th>
            <th class="p-2 border">Kapasitas</th>
            <th class="p-2 border">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="p-2 border">RAK-A1</td>
            <td class="p-2 border">Rak Lantai 1</td>
            <td class="p-2 border">200 Barang</td>
            <td class="p-2 border text-center">
                <button class="text-blue-600">Edit</button>
            </td>
        </tr>
    </tbody>
</table>
@endsection
