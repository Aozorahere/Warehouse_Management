<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Warehouse Management System' }}</title>
    @vite('resources/css/app.css')
</head>
<body>

<!-- Sidebar -->
<aside class="sidebar w-64 flex-shrink-0">
    <div class="p-6 text-xl font-extrabold text-[var(--primary)] border-b border-[var(--secondary)]">
        📦 WMS AMSAN
    </div>

    <nav class="p-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">🏠 Dashboard</a>
        <a href="{{ route('items.index') }}" class="{{ request()->routeIs('items.index') ? 'active' : '' }}">📦 Barang</a>
        <a href="{{ route('racks.index') }}" class="{{ request()->routeIs('racks.index') ? 'active' : '' }}">🗄️ Rak Gudang</a>
        <a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.index') ? 'active' : '' }}">🧾 Order</a>
        <a href="{{ route('shipments.index') }}" class="{{ request()->routeIs('shipments.index') ? 'active' : '' }}">🚚 Pengiriman</a>
    </nav>

    <form method="POST" action="{{ route('logout') }}" class="p-4 mt-auto">
        @csrf
        <button type="submit" class="w-full bg-[#00FF4D] text-gray-900 font-semibold py-2 rounded-lg hover:bg-green-500 transition">
            🔒 Logout
        </button>
    </form>
</aside>


    <main class="main-container">
        <div class="card">
            <h1 class="page-title">{{ $title ?? 'Dashboard' }}</h1>
            @yield('content')
        </div>
    </main>
</body>
</html>
