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
    <nav class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center px-6 py-4 bg-blue-700 shadow-md" x-data="{ open: false }">
    
    <div class="text-2xl font-extrabold text-indigo-50 tracking-tight">
        ADT <span class="text-gray-800">CODE.</span>
    </div>

    <ul class="hidden md:flex space-x-8 font-medium text-gray-50">
        <li>
            <a href="{{ route('home') }}" class="relative py-1 transition-colors duration-300 hover:text-white group">
                Home
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('project') }}" class="relative py-1 transition-colors duration-300 hover:text-white group">
                Project
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('about') }}" class="relative py-1 transition-colors duration-300 hover:text-white group">
                About
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="relative py-1 transition-colors duration-300 hover:text-white group">
                Contact
                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-white transition-all duration-300 group-hover:w-full"></span>
            </a>
        </li>
    </ul>

    <button @click="open = !open" class="md:hidden text-indigo-50 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path :class="{'hidden': open, 'block': !open}" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{'block': open, 'hidden': !open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         @click.away="open = false"
         class="absolute top-full left-0 right-0 bg-blue-800 border-t border-blue-600 md:hidden">
        <ul class="flex flex-col p-4 space-y-4 font-medium text-gray-50">
            <li><a href="{{ route('home') }}" class="block hover:translate-x-2 transition-transform duration-300">Home</a></li>
            <li><a href="{{ route('project') }}" class="block hover:translate-x-2 transition-transform duration-300">Project</a></li>
            <li><a href="{{ route('about') }}" class="block hover:translate-x-2 transition-transform duration-300">About</a></li>
            <li><a href="{{ route('contact') }}" class="block hover:translate-x-2 transition-transform duration-300">Contact</a></li>
        </ul>
    </div>
</nav>

<div class="h-20"></div>

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