<x-layout title="Dashboard - AMSAN WMS">

    <!-- HEADER -->
    <header class="flex justify-between items-center bg-white p-4 rounded-xl shadow-sm border border-gray-200">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Dashboard</h2>
            <p class="text-gray-500 text-sm">Ringkasan operasi warehouse</p>
        </div>

        <div class="flex items-center gap-3">
            <input type="text" placeholder="Cari sesuatu..."
                class="px-4 py-2 rounded-lg bg-gray-100 text-gray-700 border border-gray-300 
                       focus:border-[#0FA958] focus:ring-[#0FA958]">
        </div>
    </header>

    <!-- STAT CARDS -->
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

    <!-- CHART -->
    <section class="panel-light">
        <h3 class="panel-title">Grafik Barang Masuk & Keluar</h3>
        <canvas id="chartBarang"></canvas>
    </section>

    <!-- RINGKASAN -->
    <section class="panel-light">
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
    </section>

    <!-- AKTIVITAS -->
    <section class="panel-light">
        <h3 class="panel-title">Aktivitas Terbaru</h3>

        <ul class="space-y-3 text-gray-600">
            <li>📦 Barang <b>Kabel Power</b> masuk ke rak A1</li>
            <li>🚚 Barang <b>Adaptor 12V</b> dikirim ke ekspedisi J&T</li>
            <li>💡 Barang <b>LED Strip</b> ditambahkan stok 50 unit</li>
        </ul>
    </section>

    <!-- CHART SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

</x-layout>
