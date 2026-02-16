<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ADTCODE') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,900&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased bg-slate-100">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 px-4">
            
            <div class="mb-8 flex flex-col items-center">
                <a href="/" class="flex flex-col items-center space-y-2 group">
                    <div class="bg-slate-950 p-4 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(37,99,235,1)] transition-transform group-hover:-translate-y-1">
                        <svg class="w-12 h-12 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <span class="mt-4 text-2xl font-black tracking-tighter text-slate-950 uppercase italic">
                        ADT<span class="text-blue-600">CODE</span>
                    </span>
                </a>
            </div>

            <div class="w-full sm:max-w-md px-10 py-12 bg-white border-2 border-slate-950 shadow-[12px_12px_0px_0px_rgba(0,0,0,1)]">
                {{ $slot }}
            </div>

            <div class="mt-10 flex flex-col items-center space-y-1">
                <p class="text-[10px] font-black uppercase tracking-widest text-slate-400">
                    &copy; 2026 ADTCODE • Professional Dev Environment
                </p>
                <div class="h-1 w-8 bg-blue-600"></div>
            </div>
        </div>
    </body>
</html>