<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Link style Css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

    <!-- Boxicons CSS -->
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Dash</title>
</head>
<body>
<!-- Topbar with open button -->
  

  <!-- Overlay -->
  <div id="overlay" class="fixed inset-0 bg-gray-900/80 bg-opacity-60 hidden z-100 lg:hidden"></div>

  <!-- Sidebar -->
  <aside id="sidebar" class="fixed z-120 inset-y-0 left-0 w-64 bg-gray-900 lg:hidden
   text-white transform -translate-x-full transition-transform duration-300 ease-in-out">

    <div class="h-full flex flex-col">

      <!-- Header -->
      <div class="h-16 flex items-center justify-between px-4 bg-gray-800">
        <span class="text-xl font-bold">
          <img class="h-8 w-auto" src="{{asset("assets/img/Logo Campaint Original.png")}}" alt="Your Company">
        </span>
        <button id="closeSidebar" class="text-white hover:text-gray-300">
          <i class='bx bx-x text-2xl'></i>
        </button>
      </div>

      <div class="scroll_slide flex grow flex-col gap-y-5 overflow-y-auto bg-gray-900 px-4 pb-2 ring-1 ring-white/10">
          <nav class="mt-5 flex flex-1 flex-col">
            <ul role="list" class="-mx-2 flex-1 space-y-2 mr-1">
              <li>
                <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
                <a href="#" class="group flex gap-x-3 rounded-md bg-gray-800 p-2 text-sm/6 font-semibold text-white">
                  <i class='bx bx-dashboard-alt text-2xl'></i> 
                  Dashboard
                </a>
              </li>
              
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
                  <i class='bx bx-box text-2xl'></i> 
                  Product
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
                  <i class='bx bx-palette text-2xl'></i> 
                  Color
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
                  <i class='bx bx-box text-2xl'></i> 
                  Color Family
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
                  <i class='bx bx-garage text-2xl'></i> 
                  Depo
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
                  <i class='bx bx-message-circle-exclamation text-2xl'></i> 
                  About
                </a>
              </li>
              <li>
                <a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
                  <i class='bx bx-list-plus text-2xl'></i> 
                  Task
                </a>
              </li>
              
            </ul>
          </nav>
        </div>
    </div>
  </aside>

  <!-- Static sidebar for desktop -->
  <div class="hidden lg:fixed lg:inset-y-0 lg:left-0 lg:z-50 lg:block lg:w-20 lg:bg-gray-900 lg:pb-4">
    <div class="flex h-18 shrink-0 items-center justify-center">
      <img class="h-12 w-auto" src="{{asset("assets/img/Logo Campaint Original.png")}}" alt="Your Company">
    </div>
      <nav class="mt-4 scroll_slide overflow-y-scroll h-[173mm]">
        <ul role="list" class="flex flex-col items-center space-y-2  mr-0.5">
          <li>
            <!-- Current: "bg-gray-800 text-white", Default: "text-gray-400 hover:text-white hover:bg-gray-800" -->
            <a href="#" class="group flex gap-x-3 rounded-md bg-gray-800 p-3 text-sm/6 font-semibold text-white">
              <i class='bx bx-dashboard-alt text-2xl'></i> 
              <span class="sr-only">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
              <i class='bx bx-box text-2xl'></i> 
              <span class="sr-only">Product</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
              <i class='bx bx-community text-2xl'></i>
              <span class="sr-only">Customer</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
              <i class='bx bx-palette text-2xl'></i> 
              <span class="sr-only">Color</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
              <i class='bx bx-box text-2xl'></i> 
              <span class="sr-only">Color Family</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
              <i class='bx bx-garage text-2xl'></i> 
              <span class="sr-only">Depo</span>
            </a>
          </li>
          <li>
            <a href="#" class="group flex gap-x-3 rounded-md p-3 text-sm/6 font-semibold text-gray-400 hover:bg-gray-800 hover:text-white">
              <i class='bx bx-message-circle-exclamation text-2xl'></i> 
              <span class="sr-only">about</span>
            </a>
          </li>
  
        </ul>
      </nav>
  </div>


  <div class="lg:pl-18 ">
    {{-- Static slide --}}
    @include('components.slide_left')

    {{-- This place for Contianer write item content --}}
    <main class="h-100">
      <div class="px-4 py-4 sm:px-6 lg:px-8 lg:py-4">
          <!-- Main area -->
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white shadow-md rounded-xl p-6 flex items-center justify-between">
              <div>
                <p class="text-sm text-gray-500">Total Users</p>
                <h2 class="text-2xl font-bold text-gray-700">1,250</h2>
              </div>
              <div class="text-blue-500">
                <!-- icon placeholder -->
                <span class="text-3xl"></span>
              </div>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 flex items-center justify-between">
              <div>
                <p class="text-sm text-gray-500">Revenue</p>
                <h2 class="text-2xl font-bold text-gray-700">$24,500</h2>
              </div>
              <div class="text-green-500">
                <!-- icon placeholder -->
                <span class="text-3xl"></span>
              </div>
            </div>

            <div class="bg-white shadow-md rounded-xl p-6 flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-500">Orders</p>
              <h2 class="text-2xl font-bold text-gray-700">570</h2>
            </div>
            <div class="text-yellow-500">
              <!-- icon placeholder -->
              <span class="text-3xl"></span>
            </div>
          </div>

          <div class="bg-white shadow-md rounded-xl p-6 flex items-center justify-between">
            <div>
              <p class="text-sm text-gray-500">Feedback</p>
              <h2 class="text-2xl font-bold text-gray-700">75%</h2>
            </div>
            <div class="text-red-500">
              <!-- icon placeholder -->
              <span class="text-3xl"></span>
            </div>
          </div>
          </div>

      </div>

      </div>
    </main>

  </div>
<!-- JavaScript -->
  <script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const openBtn = document.getElementById('openSidebar');
    const closeBtn = document.getElementById('closeSidebar');

    openBtn.addEventListener('click', () => {
      sidebar.classList.remove('-translate-x-full');
      overlay.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });

    const userButton = document.getElementById('user-menu-button');
    const dropdownMenu = document.getElementById('user-dropdown-menu');

    userButton.addEventListener('click', () => {
      dropdownMenu.classList.toggle('hidden');
    });

    // Optional: Hide menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!userButton.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.add('hidden');
      }
    });
  </script>
</body>
</html>