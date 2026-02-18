@extends('frontend.layout')

@section('title', 'About Me - ADT CODE')

@section('content')

<div class="bg-slate-950 min-h-screen">

    {{-- HEADER HERO SECTION --}}
    <section class="relative pt-20 pb-12 px-6 border-b border-slate-900/50">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-3/4 h-64 bg-indigo-600/10 blur-[100px] -z-10 rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight uppercase mb-4">
                Who <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-violet-500">Am I?</span>
            </h2>
            <div class="h-1 w-20 bg-indigo-600 mt-4 rounded-full mx-auto"></div>
        </div>
    </section>

    {{-- MAIN CONTENT --}}
    @if($about)
    <section class="w-full py-20 px-6 relative overflow-hidden">
        
        <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-500/5 rounded-full blur-3xl -z-10"></div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-start">

                {{-- PHOTO COLUMN (Sticky effect biar keren pas discroll) --}}
                <div class="lg:col-span-5 lg:sticky lg:top-24">
                     <div class="relative group">
                        <div class="absolute -inset-1 bg-gradient-to-tr from-indigo-500 to-violet-600 rounded-[2rem] blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                        
                        <div class="relative aspect-[4/5] rounded-[1.8rem] overflow-hidden bg-slate-900 border border-slate-800 shadow-2xl">
                            @if($about->photo)
                                <img src="{{ asset('storage/' . $about->photo) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 filter grayscale group-hover:grayscale-0" alt="{{ $about->name }}">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-500 font-mono text-xs">NO IMAGE AVAILABLE</div>
                            @endif
                        </div>
                    </div>
                </div>

                {{-- INFO COLUMN --}}
                <div class="lg:col-span-7 space-y-8">
                    
                    {{-- Intro Text --}}
                    <div>
                        <div class="inline-flex items-center space-x-2 mb-6 px-3 py-1 rounded-full bg-indigo-900/30 border border-indigo-500/30 text-indigo-300">
                            <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                            <span class="text-xs font-bold tracking-widest uppercase">{{ $about->role }}</span>
                        </div>
                        
                        <h2 class="text-4xl md:text-5xl font-black text-white tracking-tight leading-tight mb-6">
                            HELLO, I'M <br> 
                            <span class="text-white">{{ $about->name }}</span>
                        </h2>
                        
                        <p class="text-xl text-indigo-400 font-medium italic border-l-4 border-indigo-500 pl-6">
                            "{{ $about->title }}"
                        </p>
                    </div>

                    {{-- Description --}}
                    <div class="text-slate-400 text-base leading-relaxed space-y-4 font-normal">
                        {!! nl2br(e($about->desc)) !!}
                    </div>

                    {{-- Details Grid (Card Style) --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-8 border-t border-slate-800">
                        <div class="p-4 rounded-2xl bg-slate-900/50 border border-slate-800 hover:border-indigo-500/30 transition-colors">
                             <span class="block text-[10px] font-bold uppercase text-slate-500 tracking-widest mb-3">Education Base</span>
                             <div class="flex items-center gap-3">
                                 <div class="p-2 bg-indigo-500/10 rounded-lg text-indigo-400">
                                     <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/></svg>
                                 </div>
                                 <span class="text-white font-semibold text-sm">{{ $about->study }}</span>
                             </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-slate-900/50 border border-slate-800 hover:border-indigo-500/30 transition-colors">
                             <span class="block text-[10px] font-bold uppercase text-slate-500 tracking-widest mb-3">Based In</span>
                             <div class="flex items-center gap-3">
                                 <div class="p-2 bg-indigo-500/10 rounded-lg text-indigo-400">
                                     <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                 </div>
                                 <span class="text-white font-semibold text-sm">{{ $about->alamat }}</span>
                             </div>
                        </div>
                    </div>

                    {{-- Social Media (Full Button Style) --}}
                    <div class="pt-6">
                        <span class="text-xs font-bold uppercase text-slate-500 tracking-widest mb-4 block">Connect With Me</span>
                        <div class="flex flex-wrap gap-3">
                            
                            {{-- GitHub --}}
                            @if($about->github)
                                <a href="{{ $about->github }}" target="_blank" class="flex items-center gap-3 px-5 py-3 bg-slate-800 hover:bg-white hover:text-black text-slate-300 rounded-lg transition-all duration-300 group border border-slate-700 hover:border-white hover:-translate-y-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                    <span class="text-sm font-bold">GitHub</span>
                                </a>
                            @endif

                            {{-- LinkedIn --}}
                            @if($about->linkedin)
                                <a href="{{ $about->linkedin }}" target="_blank" class="flex items-center gap-3 px-5 py-3 bg-slate-800 hover:bg-[#0077b5] hover:text-white text-slate-300 rounded-lg transition-all duration-300 group border border-slate-700 hover:border-[#0077b5] hover:-translate-y-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    <span class="text-sm font-bold">LinkedIn</span>
                                </a>
                            @endif

                            {{-- Instagram --}}
                            @if($about->instagram)
                                <a href="{{ $about->instagram }}" target="_blank" class="flex items-center gap-3 px-5 py-3 bg-slate-800 hover:bg-pink-600 hover:text-white text-slate-300 rounded-lg transition-all duration-300 group border border-slate-700 hover:border-pink-600 hover:-translate-y-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.26-.148-4.771-1.699-4.919-4.919-.058-1.265-.07-1.644-.07-4.85s.012-3.584.07-4.85c.148-3.204 1.671-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                    <span class="text-sm font-bold">Instagram</span>
                                </a>
                            @endif

                            {{-- Facebook --}}
                            @if($about->facebook)
                                <a href="{{ $about->facebook }}" target="_blank" class="flex items-center gap-3 px-5 py-3 bg-slate-800 hover:bg-[#1877F2] hover:text-white text-slate-300 rounded-lg transition-all duration-300 group border border-slate-700 hover:border-[#1877F2] hover:-translate-y-1">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                                    <span class="text-sm font-bold">Facebook</span>
                                </a>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endif

</div>
@endsection