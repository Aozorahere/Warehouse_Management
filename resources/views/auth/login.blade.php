<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin Gudang</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#D1F0DB] to-[#00FF4D]/40">
    <div class="bg-white/80 backdrop-blur-xl shadow-2xl rounded-2xl p-8 w-full max-w-md border border-[#D1F0DB]">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-extrabold text-[#00FF4D]">📦 WMS AMSAN</h1>
            <p class="text-gray-600 mt-2">Login Admin Gudang</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-300 text-red-600 p-3 rounded mb-4 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}" class="space-y-5">
            @csrf
            <div>
                <label for="email" class="block text-gray-700 font-medium">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full mt-1 px-4 py-2 border border-[#D1F0DB] rounded-lg focus:ring-2 focus:ring-[#00FF4D] focus:outline-none"
                    placeholder="admin@amsan.com" required>
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-medium">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full mt-1 px-4 py-2 border border-[#D1F0DB] rounded-lg focus:ring-2 focus:ring-[#00FF4D] focus:outline-none"
                    placeholder="********" required>
            </div>

            <button type="submit"
                class="w-full py-2 bg-[#00FF4D] text-gray-900 font-semibold rounded-lg hover:bg-green-400 shadow-lg transition">
                Masuk
            </button>
        </form>

        <div class="mt-6 text-center text-sm text-gray-600">
            <p>© {{ date('Y') }} AMSAN Electronics</p>
        </div>
    </div>
</body>
</html>
