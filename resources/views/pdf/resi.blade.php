<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 20px;
            background: #f5fff7;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h2 {
            color: #0f5132;
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px;
        }
        th, td {
            border: 1px solid #c3e6cb;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #d1e7dd;
        }
        .qrcode {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Label Sortir - Rak {{ strtoupper($rak) }}</h2>
        <small>{{ date('d M Y') }}</small>
    </div>

    <table>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama</th>
                <th>SKU</th>
                <th>QR Code</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{ $item->kode_barang }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->rak }}</td>
                    <td class="qrcode">
                        {!! QrCode::size(70)->generate($item->kode_barang) !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
