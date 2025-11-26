<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'AMSAN WMS' }}</title>

    @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen bg-gray-100 text-gray-800 flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white shadow-md border-r border-gray-200 fixed h-full flex flex-col">

        <div class="p-6 border-b border-gray-200 bg-[#0FA958]">
            <h1 class="text-2xl font-bold text-white">AMSAN WMS</h1>
            <p class="text-xs text-green-100">Warehouse Management System</p>
        </div>

        <nav class="flex-1 p-4">
    <ul class="space-y-2">

        <li>
            <a href="{{ route('dashboard') }}"
               class="nav-item-light {{ request()->routeIs('dashboard') ? 'active-light' : '' }}">
                🏠 Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('produk.index') }}"
               class="nav-item-light {{ request()->routeIs('produk.index') ? 'active-light' : '' }}">
                📦 Produk
            </a>
        </li>

        <li>
            <a href="{{ route('produk.stok') }}"
               class="nav-item-light {{ request()->routeIs('produk.stok') ? 'active-light' : '' }}">
                📊 Stok
            </a>
        </li>

        <li>
            <a href="{{ route('produk.rak') }}"
               class="nav-item-light {{ request()->routeIs('produk.rak') ? 'active-light' : '' }}">
                🗄️ Rak
            </a>
        </li>

        <li>
            <a href="{{ route('produk.masuk') }}"
               class="nav-item-light {{ request()->routeIs('produk.masuk') ? 'active-light' : '' }}">
                ⬇️ Barang Masuk
            </a>
        </li>

        <li>
            <a href="{{ route('produk.keluar') }}"
               class="nav-item-light {{ request()->routeIs('produk.keluar') ? 'active-light' : '' }}">
                ⬆️ Barang Keluar
            </a>
        </li>

    </ul>
</nav>


        <div class="p-4 border-t border-gray-200">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="w-full bg-red-500 text-white py-2 rounded-lg hover:bg-red-600 transition shadow">
                    Logout
                </button>
            </form>
        </div>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="ml-64 w-full p-8 space-y-10">
        {{ $slot }}
    </main>

</body>

<style>
.nav-item-light {
    @apply block px-3 py-2 rounded-lg text-gray-700 hover:bg-gray-100 cursor-pointer transition;
}

.active-light {
    background-color: #0FA958 !important;
    color: white !important;
}

.panel-light {
    @apply bg-white p-6 rounded-xl shadow-sm border border-gray-200;
}

.stat-card-light {
    @apply bg-white p-5 rounded-xl shadow-sm border border-gray-200;
}
</style>

</html>
