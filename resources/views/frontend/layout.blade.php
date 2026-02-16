<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-6 py-4 bg-blue-700 shadow-md">
        <div class="text-2xl font-extrabold text-indigo-50 tracking-tight">
            ADT <span class="text-gray-800">CODE.</span>
        </div>
        <ul class="flex space-x-8 font-medium text-gray-50">
            <li><a href="{{ route('home') }}" class="hover:text-gray-400 transition">Home</a></li>
            <li><a href="{{ route('project') }}" class="hover:text-gray-400 transition">Project</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-gray-400 transition">About</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-gray-400 transition">Contact</a></li>
        </ul>
    </nav>

    <main class="pt-16.5 bg-gray-100 max-w-6xl mx-auto">
        @yield('content')
    </main>

    <footer class="px-6"> 
        <div class="max-w-6xl mx-auto bg-blue-500 text-white py-12 px-10"> 
            <div class="flex flex-col md:flex-row justify-between items-center border-b border-gray-800 pb-8">
                <div class="mb-6 md:mb-0 text-center md:text-left">
                    <h2 class="text-2xl font-bold text-indigo-50">ADT <span class="text-gray-800">CODE.</span></h2>
                    <p class="text-gray-50 mt-2 max-w-xs">Membangun masa depan dengan kode dan kreativitas dari nol.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-50 hover:text-gray-400 transition">Privacy Policy</a>
                    <a href="#" class="text-gray-50 hover:text-gray-400 transition">Terms of Service</a>
                    <a href="#" class="text-gray-50 hover:text-gray-400 transition">Contact</a>
                </div>
            </div>
            <div class="mt-8 text-center md:text-left text-gray-50 text-sm">
                &copy; 2026 Aditya Mukti F. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>