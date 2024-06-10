<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>
<body class="h-full">
<div class="min-h-full">
  <x-navbar></x-navbar>
  <header class="relative bg-gray-300 py-12">
    <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between space-y-8 lg:space-y-0">
        <!-- Title Section -->
        <div class="w-full lg:w-1/2 px-8 text-center lg:text-left">
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-800">Welcome to Mercu Buana University</h1>
            <p class="mt-4 text-lg text-gray-600">Discover our international programs and join a vibrant global community.</p>
            <p class="mt-2 text-lg text-gray-600">Explore a range of courses and student exchange opportunities designed to enhance your educational experience and foster global connections.</p>
            <p class="mt-2 text-lg text-gray-600">Join us and be part of an inclusive and dynamic academic environment where innovation and creativity thrive.</p>
        </div>

        <!-- Image Section -->
        <div class="w-full lg:w-1/2 flex justify-center lg:justify-end">
            <div class="w-64 h-64 relative">
                <img src="https://pendaftaran.mercubuana.ac.id/images/locations/Meruya.jpg" alt="Campus Image" class="absolute inset-0 w-full h-full object-cover rounded-lg shadow-lg">
            </div>
        </div>
    </div>
</header>




  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
  </main>
</div>

<x-footer></x-footer>

</body>
</html>

