<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Label Rak - {{ $rak }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .label { border: 1px solid #ccc; padding: 12px; margin: 8px; border-radius: 8px; width: 45%; display: inline-block; vertical-align: top; }
        .title { font-size: 14px; font-weight: bold; color: #0a7d34; }
        .info { font-size: 12px; color: #555; }
        .qr { float: right; margin-top: -30px; }
    </style>
</head>
<body>
    <h2>Label Barang - Rak {{ $rak }}</h2>
    @foreach ($products as $p)
        <div class="label">
            <div class="title">{{ $p->nama_barang }}</div>
            <div class="info">SKU: {{ $p->kode_barang }}</div>
            <div class="info">Rak: {{ $p->rak }}</div>
            <div class="info">Stok Minimum: {{ $p->stok_minimum }}</div>
            <div class="qr">
                <img src="data:image/png;base64,{{ base64_encode(QrCode::format('png')->size(90)->generate('SKU:'.$p->kode_barang.' | Rak:'.$p->rak)) }}">
            </div>
        </div>
    @endforeach
</body>
</html>
