<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AMSAN WMS</title>
      @vite(['resources/css/app.css'])
</head>
<body>
  <div class="login-card">
    <h1>AMSAN WMS</h1>
    <p>Warehouse Management System</p>

    @if ($errors->any())
      <div class="error-message">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ route('login.submit') }}">
      @csrf

      <label for="username">Username</label>
      <input type="text" name="username" id="username" placeholder="Masukkan username" required>

      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Masukkan password" required>

      <div class="remember-forgot">
        <label><input type="checkbox"> Ingat saya</label>
        <a href="#">Lupa password?</a>
      </div>

      <button type="submit">Masuk</button>
    </form>

    <footer>
      © {{ date('Y') }} <span>AMSAN Electronics</span>. All rights reserved.
    </footer>
  </div>
</body>

</html>
