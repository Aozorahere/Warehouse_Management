<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Warehouse Management System' }}</title>
    @vite('resources/css/app.css')
</head>
<body>

    <aside class="sidebar">
        <div class="sidebar-header">📦 WMS AMSAN</div>
        <nav>
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
            <a href="{{ route('items.index') }}" class="{{ request()->routeIs('items.index') ? 'active' : '' }}">📦 Barang</a>
            <a href="{{ route('racks.index') }}" class="{{ request()->routeIs('racks.index') ? 'active' : '' }}">🗄️ Rak Gudang</a>
            <a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.index') ? 'active' : '' }}">🧾 Order</a>
            <a href="{{ route('shipments.index') }}" class="{{ request()->routeIs('shipments.index') ? 'active' : '' }}">🚚 Pengiriman</a>
        </nav>
    </aside>

    <main class="main-container">
        <div class="card">
            <h1 class="page-title">{{ $title ?? 'Dashboard' }}</h1>
            @yield('content')
        </div>
    </main>
</body>
</html>
