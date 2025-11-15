<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - AMSAN WMS</title>

    @vite(['resources/css/app.css'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    <!-- END SIDEBAR -->


    <!-- CONTENT -->
    <main class="ml-64 w-full p-8 space-y-10">

        <header class="flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-200">

            <div>
                <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
                <p class="text-gray-500 text-sm">Ringkasan operasi warehouse</p>
            </div>

            <div class="flex items-center gap-3">

                <input type="text" placeholder="Cari sesuatu..."
                    class="px-4 py-2 rounded-lg bg-gray-100 text-gray-700 border border-gray-300 focus:border-[#0FA958] focus:ring-[#0FA958]">

            </div>

        </header>

        <!-- CARDS -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="stat-card-light">
                <div class="stat-title">Total Produk</div>
                <div class="stat-value text-[#0FA958]">124</div>
                <p class="stat-desc">Terdata di sistem</p>
            </div>

            <div class="stat-card-light">
                <div class="stat-title">Barang Masuk</div>
                <div class="stat-value text-green-600">350</div>
                <p class="stat-desc">Dalam 30 hari terakhir</p>
            </div>

            <div class="stat-card-light">
                <div class="stat-title">Barang Keluar</div>
                <div class="stat-value text-red-500">290</div>
                <p class="stat-desc">Dalam 30 hari terakhir</p>
            </div>

        </section>

        <!-- CHART + RINGKASAN -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="panel-light">
                <h3 class="panel-title">Grafik Barang Masuk & Keluar</h3>
                <canvas id="chartBarang"></canvas>
            </div>

            <div class="panel-light">
                <h3 class="panel-title">Ringkasan Gudang</h3>

                <ul class="space-y-4 text-gray-700">

                    <li class="flex justify-between">
                        <span>📦 Total SKU</span>
                        <span class="font-bold">87</span>
                    </li>

                    <li class="flex justify-between">
                        <span>🗄️ Total Rak</span>
                        <span class="font-bold">22</span>
                    </li>

                    <li class="flex justify-between">
                        <span>🚚 Ekspedisi Aktif</span>
                        <span class="font-bold">5</span>
                    </li>

                </ul>

            </div>

        </section>

        <!-- RECENT ACTIVITY -->
        <section class="panel-light">
            <h3 class="panel-title">Aktivitas Terbaru</h3>

            <ul class="space-y-3 text-gray-600">
                <li>📦 Barang <b>Kabel Power</b> masuk ke rak A1</li>
                <li>🚚 Barang <b>Adaptor 12V</b> dikirim ke ekspedisi J&T</li>
                <li>💡 Barang <b>LED Strip</b> ditambahkan stok 50 unit</li>
            </ul>
        </section>

    </main>

</body>


<!-- STYLE -->
<style>
.nav-item-light {
    @apply block px-3 py-2 rounded-lg text-gray-700 hover:bg-gray-100 cursor-pointer;
}
.active-light {
    background-color: #0FA958 !important;
    color: white !important;
}

/* STAT CARDS */
.stat-card-light {
    @apply bg-white p-5 rounded-xl shadow-sm border border-gray-200;
}
.stat-title {
    @apply text-gray-500 text-sm;
}
.stat-value {
    @apply text-3xl font-bold;
}
.stat-desc {
    @apply text-gray-400 text-sm;
}

/* PANEL */
.panel-light {
    @apply bg-white p-6 rounded-xl shadow-sm border border-gray-200;
}
.panel-title {
    @apply text-xl font-bold mb-4 text-gray-800;
}
</style>


<!-- CHART -->
<script>
    const ctx = document.getElementById('chartBarang');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
            datasets: [
                {
                    label: 'Barang Masuk',
                    data: [50, 80, 60, 90, 120, 150],
                    borderWidth: 3,
                    borderColor: '#0FA958',
                    backgroundColor: '#0FA95822',
                    tension: 0.3
                },
                {
                    label: 'Barang Keluar',
                    data: [40, 60, 55, 70, 110, 130],
                    borderWidth: 3,
                    borderColor: '#EF4444',
                    backgroundColor: '#EF444422',
                    tension: 0.3
                }
            ]
        },
        options: { responsive: true }
    });
</script>

</html>
