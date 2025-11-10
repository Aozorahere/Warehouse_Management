<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard | AMSAN WMS</title>
  @vite(['resources/css/app.css'])
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="nav-brand">
      <h1>AMSAN WMS</h1>
      <p>Warehouse System</p>
    </div>
    <div class="nav-links">
      <a href="#">🏠 Dashboard</a>
      <a href="#">📦 Produk</a>
      <a href="#">📊 Stok</a>
      <a href="#">🗄️ Rak</a>
      <a href="#">⬇️ Barang Masuk</a>
      <a href="#">⬆️ Barang Keluar</a>
    </div>
    <div class="nav-actions">
      <button class="dark-btn">🌙 Dark Mode</button>
      <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
      </form>
    </div>
  </nav>

  <!-- Main Content -->
  <main class="dashboard">
    <section class="stats">
      <div class="card">
        <h3>Total Produk</h3>
        <p class="number">124</p>
      </div>
      <div class="card">
        <h3>Barang Masuk</h3>
        <p class="number green">350</p>
      </div>
      <div class="card">
        <h3>Barang Keluar</h3>
        <p class="number red">290</p>
      </div>
    </section>

    <section class="activity">
      <h2>Aktivitas Terbaru</h2>
      <ul>
        <li>📦 Barang <strong>Kabel Power</strong> masuk ke rak A1</li>
        <li>🚚 Barang <strong>Adaptor 12V</strong> dikirim ke ekspedisi J&T</li>
        <li>💡 Barang <strong>LED Strip</strong> ditambahkan stok 50 unit</li>
      </ul>
    </section>
  </main>

  <footer>
    © {{ date('Y') }} <span>AMSAN Electronics</span>. All rights reserved.
  </footer>
</body>
</html>
