<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'AMSAN WMS')</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-gray-900 dark:text-gray-100 transition-colors duration-300">
  <div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside id="sidebar"
      class="w-64 bg-white/80 dark:bg-gray-800 backdrop-blur-xl border-r border-gray-200 dark:border-gray-700 shadow-lg transition-all duration-300">
      <div class="p-6 text-center border-b border-gray-200 dark:border-gray-700">
        <h1 class="text-2xl font-extrabold text-green-600">AMSAN WMS</h1>
        <p class="text-sm text-gray-500 dark:text-gray-400">Warehouse System</p>
      </div>

      <nav class="mt-6 space-y-2 px-4">
        <a href="/dashboard" class="flex items-center p-3 rounded-xl hover:bg-green-100 dark:hover:bg-green-900/30 transition">
          <i data-lucide="layout-dashboard" class="w-5 h-5 mr-3 text-green-500"></i> Dashboard
        </a>
        <a href="/products" class="flex items-center p-3 rounded-xl hover:bg-green-100 dark:hover:bg-green-900/30 transition">
          <i data-lucide="package" class="w-5 h-5 mr-3 text-green-500"></i> Produk
        </a>
        <a href="/stocks" class="flex items-center p-3 rounded-xl hover:bg-green-100 dark:hover:bg-green-900/30 transition">
          <i data-lucide="archive" class="w-5 h-5 mr-3 text-green-500"></i> Stok
        </a>
        <a href="/racks" class="flex items-center p-3 rounded-xl hover:bg-green-100 dark:hover:bg-green-900/30 transition">
          <i data-lucide="grid" class="w-5 h-5 mr-3 text-green-500"></i> Rak
        </a>
        <a href="/inbounds" class="flex items-center p-3 rounded-xl hover:bg-green-100 dark:hover:bg-green-900/30 transition">
          <i data-lucide="arrow-down-circle" class="w-5 h-5 mr-3 text-green-500"></i> Barang Masuk
        </a>
        <a href="/outbounds" class="flex items-center p-3 rounded-xl hover:bg-green-100 dark:hover:bg-green-900/30 transition">
          <i data-lucide="arrow-up-circle" class="w-5 h-5 mr-3 text-green-500"></i> Barang Keluar
        </a>
      </nav>

      <div class="absolute bottom-6 left-0 w-full px-6">
        <button id="toggleDarkMode"
          class="w-full py-2 flex items-center justify-center bg-green-500 text-white rounded-xl hover:bg-green-600 transition">
          <i data-lucide="moon" class="w-4 h-4 mr-2"></i> Dark Mode
        </button>
      </div>
    </aside>

    <!-- Main content -->
    <main class="flex-1 p-8 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
      <header class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-green-600 dark:text-green-400">@yield('title')</h2>
        <form action="{{ route('logout') }}" method="POST">
          @csrf
          <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition flex items-center">
            <i data-lucide="log-out" class="w-4 h-4 mr-2"></i> Logout
          </button>
        </form>
      </header>

      @yield('content')
    </main>
  </div>

  <script>
    lucide.createIcons();

    // Dark mode toggle
    const toggleDarkMode = document.getElementById("toggleDarkMode");
    const html = document.documentElement;
    toggleDarkMode.addEventListener("click", () => {
      html.classList.toggle("dark");
      localStorage.setItem("theme", html.classList.contains("dark") ? "dark" : "light");
    });

    // Load saved theme
    if (localStorage.getItem("theme") === "dark") {
      html.classList.add("dark");
    }
  </script>
</body>
</html>
