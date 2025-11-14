<!DOCTYPE html>
<html lang="id" x-data="{ darkMode: true }" x-bind:class="darkMode ? 'dark' : ''">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - AMSAN WMS</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        /* Komponen kartu ringkas */
        .card {
            @apply p-5 rounded-xl bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 shadow-sm;
        }
        .nav-item {
            @apply block px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-800 cursor-pointer;
        }
        .active {
            @apply bg-green-600 text-white hover:bg-green-700;
        }
    </style>
</head>

<body class="min-h-screen bg-gray-100 dark:bg-gray-950 flex">

    <!-- SIDEBAR -->
    <aside class="w-60 bg-white dark:bg-gray-900 shadow-xl h-full fixed border-r border-gray-200 dark:border-gray-800">

        <div class="p-6 border-b dark:border-gray-800">
            <h1 class="text-2xl font-bold text-green-600">AMSAN WMS</h1>
            <p class="text-xs text-gray-500 dark:text-gray-400">Warehouse System</p>
        </div>

        <nav class="p-4 space-y-1">
            <a class="nav-item active">🏠 Dashboard</a>
            <a class="nav-item">📦 Produk</a>
            <a class="nav-item">📊 Stok</a>
            <a class="nav-item">🗄️ Rak</a>
            <a class="nav-item">⬇️ Barang Masuk</a>
            <a class="nav-item">⬆️ Barang Keluar</a>
        </nav>

        <div class="p-4 border-t dark:border-gray-800">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="w-full bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN -->
    <main class="ml-60 w-full p-8">

        <header class="flex items-center justify-between mb-10">
            <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Dashboard</h2>

            <button 
                @click="darkMode = !darkMode"
                class="px-4 py-2 bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-lg"
            >
                🌙 Theme
            </button>
        </header>

        <!-- STATS -->
        <section class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
            <div class="card">
                <p class="text-sm text-gray-500 dark:text-gray-400">Total Produk</p>
                <p class="text-3xl font-semibold text-green-600">124</p>
            </div>

            <div class="card">
                <p class="text-sm text-gray-500 dark:text-gray-400">Barang Masuk</p>
                <p class="text-3xl font-semibold text-green-600">350</p>
            </div>

            <div class="card">
                <p class="text-sm text-gray-500 dark:text-gray-400">Barang Keluar</p>
                <p class="text-3xl font-semibold text-green-600">290</p>
            </div>
        </section>

        <!-- RECENT -->
        <section class="card">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">Aktivitas Terbaru</h3>

            <ul class="space-y-2 text-gray-600 dark:text-gray-300 text-sm">
                <li>📦 Barang <b>Kabel Power</b> masuk ke rak A1</li>
                <li>🚚 Barang <b>Adaptor 12V</b> dikirim ke ekspedisi J&T</li>
                <li>💡 Barang <b>LED Strip</b> ditambahkan stok 50 unit</li>
            </ul>
        </section>

    </main>

</body>
</html>
