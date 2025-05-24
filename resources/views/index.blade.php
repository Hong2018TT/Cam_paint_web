<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {{-- Link style Css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    
  <!-- Boxicons CSS -->
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dash</title>
  <title>Login Form Tailwind CSS 4.1</title>
</head>
<body class="bg-gradient-to-r from-green-50 to-blue-50 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-sm">
    
    <div class="flex justify-center items-center">
        <img src="{{asset('assets/img/Logo Campaint Original.png')}}" alt="" class="h-50 w-auto">
    </div>
    <form action="#" method="POST">
      <div class="mb-4">
        <label class="block text-gray-600 mb-2" for="email">Email</label>
        <input type="email" id="email" name="email" required
          class="w-full px-4 py-2 rounded-md border border-gray-300 bg-gray-50 focus:border-blue-500 outline-none" />
      </div>

      <div class="mb-6">
        <label class="block text-gray-600 mb-2" for="password">Password</label>
        <input type="password" id="password" name="password" required
          class="w-full px-4 py-2 rounded-md border border-gray-300 bg-gray-50 focus:border-blue-500 outline-none" />
      </div>

      <div class="flex items-center justify-between mb-4">
        <label class="inline-flex items-center">
          <input type="checkbox" class="form-checkbox text-blue-600">
          <span class="ml-2 text-gray-600">Remember me</span>
        </label>
        <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
      </div>

      <button type="submit"
        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md transition-colors duration-200">
        Sign In
      </button>
    </form>
  </div>

</body>
</html>