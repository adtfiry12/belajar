<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ADT CODE - Backend Developer')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        [x-cloak] { display: none !important; }
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-300 antialiased selection:bg-indigo-500 selection:text-white flex flex-col min-h-screen">

    <nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="{ 'bg-slate-950/80 backdrop-blur-xl border-b border-slate-800/60': scrolled, 'bg-transparent border-transparent': !scrolled }"
     class="fixed top-0 w-full z-50 transition-all duration-500">
     
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="group flex flex-col">
                    <h1 class="text-2xl font-black tracking-tighter text-white group-hover:text-indigo-400 transition-colors duration-300">
                        ADT <span class="text-indigo-600 group-hover:text-white transition-colors duration-300">CODE.</span>
                    </h1>
                    <span class="text-[10px] font-bold tracking-[0.35em] text-slate-500 uppercase mt-0.5 group-hover:text-indigo-400 transition-colors duration-300">
                        Backend Dev
                    </span>
                </a>
            </div>

            <div class="hidden md:flex items-center justify-center">
                <div class="flex items-center bg-slate-900/50 border border-slate-800/50 rounded-full px-1 py-1 backdrop-blur-sm shadow-sm">
                    @php
                        $navBase = "px-5 py-2 text-sm font-medium rounded-full transition-all duration-300";
                        $navActive = "bg-indigo-600 text-white shadow-md shadow-indigo-500/20";
                        $navInactive = "text-slate-400 hover:text-white hover:bg-slate-800/50";
                    @endphp

                    <a href="{{ route('home') }}" class="{{ $navBase }} {{ request()->routeIs('home') ? $navActive : $navInactive }}">Home</a>
                    <a href="{{ route('project') }}" class="{{ $navBase }} {{ request()->routeIs('project') ? $navActive : $navInactive }}">Projects</a>
                    <a href="{{ route('about') }}" class="{{ $navBase }} {{ request()->routeIs('about') ? $navActive : $navInactive }}">About</a>
                </div>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('contact') }}" class="hidden md:inline-flex items-center justify-center px-5 py-2.5 text-sm font-bold text-white transition-all duration-200 bg-gradient-to-r from-indigo-600 to-violet-600 rounded-lg hover:from-indigo-500 hover:to-violet-500 hover:shadow-lg hover:shadow-indigo-600/30 transform hover:-translate-y-0.5">
                    Let's Talk
                    <svg class="w-4 h-4 ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>

                <div class="flex md:hidden">
                    <button @click="open = !open" type="button" class="text-slate-300 hover:text-white focus:outline-none p-2 rounded-lg hover:bg-slate-800 transition-colors">
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6 transform transition-transform duration-300" :class="{'rotate-90 opacity-0 absolute': open, 'rotate-0 opacity-100': !open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6 transform transition-transform duration-300" :class="{'rotate-0 opacity-100': open, '-rotate-90 opacity-0 absolute': !open}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div x-show="open" 
         x-collapse
         @click.away="open = false"
         class="md:hidden bg-slate-950 border-b border-slate-800/60 shadow-2xl overflow-hidden" x-cloak>
        <div class="px-4 pt-2 pb-6 space-y-2">
            @php
                $mobileLink = "block px-4 py-3 rounded-lg text-base font-medium transition-all duration-200";
                $mobileActive = "bg-indigo-600/10 text-indigo-400 border-l-2 border-indigo-500 pl-3";
                $mobileInactive = "text-slate-400 hover:bg-slate-900 hover:text-white";
            @endphp
            
            <a href="{{ route('home') }}" class="{{ $mobileLink }} {{ request()->routeIs('home') ? $mobileActive : $mobileInactive }}">Home</a>
            <a href="{{ route('project') }}" class="{{ $mobileLink }} {{ request()->routeIs('project') ? $mobileActive : $mobileInactive }}">Projects</a>
            <a href="{{ route('about') }}" class="{{ $mobileLink }} {{ request()->routeIs('about') ? $mobileActive : $mobileInactive }}">About</a>
            <a href="{{ route('contact') }}" class="block w-full text-center mt-6 px-5 py-3 rounded-lg bg-indigo-600 text-white font-bold shadow-lg active:scale-95 transition-transform">
                Contact Me
            </a>
        </div>
    </div>
</nav>

    <main class="flex-grow pt-24 relative overflow-hidden">
        <div class="fixed top-0 left-1/4 w-96 h-96 bg-indigo-600/20 rounded-full blur-[120px] -z-10 pointer-events-none"></div>
        <div class="fixed bottom-0 right-1/4 w-96 h-96 bg-violet-600/10 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

    <footer class="bg-slate-950 border-t border-slate-900 pt-16 pb-8 mt-20 relative overflow-hidden">
        <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-indigo-500/50 to-transparent"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-12">
                
                <div class="md:col-span-5">
                    <span class="text-2xl font-black text-white flex items-center gap-2">
                        ADT <span class="text-indigo-600">CODE.</span>
                    </span>
                    <p class="mt-4 text-slate-400 leading-relaxed text-sm max-w-sm">
                        Crafting robust backend architectures and scalable web solutions. 
                        Let's build something efficient, secure, and powerful together.
                    </p>
                </div>

                <div class="md:col-span-3">
                    <h3 class="text-sm font-bold text-white uppercase tracking-widest mb-4">Explore</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Home</a></li>
                        <li><a href="{{ route('project') }}" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">Our Projects</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-400 hover:text-indigo-400 transition-colors text-sm">About Me</a></li>
                    </ul>
                </div>

                <div class="md:col-span-4">
                    <h3 class="text-sm font-bold text-white uppercase tracking-widest mb-4">Connect</h3>
                    
                    <div class="flex space-x-4 mb-6">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-slate-900 text-slate-400 hover:bg-white hover:text-black transition-all duration-300 hover:-translate-y-1 shadow-md border border-slate-800">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-lg bg-slate-900 text-slate-400 hover:bg-[#0077b5] hover:text-white transition-all duration-300 hover:-translate-y-1 shadow-md border border-slate-800">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="mailto:contact@adtcode.com" class="w-10 h-10 flex items-center justify-center rounded-lg bg-slate-900 text-slate-400 hover:bg-red-500 hover:text-white transition-all duration-300 hover:-translate-y-1 shadow-md border border-slate-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-slate-800/80 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-slate-500 text-xs text-center md:text-left">
                    &copy; {{ date('Y') }} Aditya Mukti F. All rights reserved. <span class="hidden md:inline mx-1">|</span> Built with <span class="text-indigo-500 font-semibold">Laravel v{{ Illuminate\Foundation\Application::VERSION }}</span>
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0 text-xs font-medium">
                    <a href="{{ route('privacy') }}" class="text-slate-500 hover:text-indigo-400 transition">Privacy Policy</a>
                    <a href="{{ route('terms') }}" class="text-slate-500 hover:text-indigo-400 transition">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>