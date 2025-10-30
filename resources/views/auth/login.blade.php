<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login | WMS AMSAN</title>
  @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 via-white to-green-100 relative overflow-hidden">

  <!-- Animated background orbs -->
  <div class="absolute inset-0 -z-10 overflow-hidden">
    <div class="absolute w-[400px] h-[400px] bg-green-300/30 rounded-full blur-3xl top-[-100px] left-[-100px] animate-pulse"></div>
    <div class="absolute w-[500px] h-[500px] bg-emerald-300/30 rounded-full blur-3xl bottom-[-150px] right-[-150px] animate-pulse delay-300"></div>
  </div>

  <div class="login-container w-full max-w-md px-4">
    <div class="login-card relative bg-white/40 backdrop-blur-xl border border-green-200/40 shadow-xl rounded-3xl p-10 overflow-hidden transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl">
      
      <div class="text-center mb-8">
        <h1 class="text-3xl font-extrabold text-green-600 tracking-tight">AMSAN WMS</h1>
        <p class="text-gray-600 text-sm mt-2">Warehouse Management System</p>
      </div>

      @if ($errors->any())
        <div class="bg-red-50 border border-red-300 text-red-600 p-3 rounded-lg mb-4 text-sm">
          {{ $errors->first() }}
        </div>
      @endif

      <form method="POST" action="{{ route('login.submit') }}" class="space-y-6">
        @csrf
        <div>
          <label for="email" class="block text-gray-800 text-sm font-medium mb-1">Email</label>
          <input type="email" name="email" id="email"
            class="w-full px-4 py-3 border border-gray-200/60 rounded-xl shadow-sm focus:border-green-400 focus:ring-2 focus:ring-green-200 transition-all outline-none bg-white/70"
            placeholder="admin@amsan.com" required>
        </div>

        <div>
          <label for="password" class="block text-gray-800 text-sm font-medium mb-1">Password</label>
          <input type="password" name="password" id="password"
            class="w-full px-4 py-3 border border-gray-200/60 rounded-xl shadow-sm focus:border-green-400 focus:ring-2 focus:ring-green-200 transition-all outline-none bg-white/70"
            placeholder="********" required>
        </div>

        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center space-x-2">
            <input type="checkbox" class="text-green-500 focus:ring-green-400 rounded">
            <span class="text-gray-600">Ingat saya</span>
          </label>
          <a href="#" class="text-green-600 hover:text-green-700 font-medium transition">Lupa password?</a>
        </div>

        <button type="submit"
          class="w-full py-3 bg-gradient-to-r from-green-400 to-green-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-[1.03] transition-all duration-300">
          Masuk
        </button>
      </form>

      <div class="mt-8 text-center text-sm text-gray-500">
        <p>© {{ date('Y') }} <span class="font-semibold text-green-600">AMSAN Electronics</span>. All rights reserved.</p>
      </div>
    </div>
  </div>
</body>
</html>
