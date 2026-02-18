@extends('frontend.layout')
@section('title', 'Projects - ADT CODE')

@section('content')

    @php
        // Chunk tetap 8 agar grid padat
        $projectChunks = $projects->chunk(8);
        $totalProjects = $projects->count();
    @endphp

<div class="bg-slate-950 min-h-screen">

    {{-- HEADER SECTION --}}
    <section class="relative pt-20 pb-12 px-6 border-b border-slate-900/50">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-3/4 h-64 bg-indigo-600/10 blur-[100px] -z-10 rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto text-center">
            <span class="inline-block py-1 px-3 rounded-full bg-slate-900 border border-slate-800 text-[10px] font-bold tracking-[0.2em] text-indigo-400 uppercase mb-4 shadow-lg shadow-indigo-900/20">
                // Repository_Archive
            </span>
            <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight uppercase mb-4">
                Selected <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-violet-500">Works.</span>
            </h2>
            <p class="text-slate-400 text-sm md:text-base max-w-2xl mx-auto leading-relaxed">
                A collection of deployed applications, backend systems, and experimental code.
                <span class="block mt-2 text-slate-500 font-mono text-xs">Total Deployments: {{ $totalProjects }}</span>
            </p>
        </div>
    </section>

    {{-- PROJECT GRID SECTION --}}
    <section x-data="{ activePage: 1 }" class="w-full py-16 relative overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-6 relative">
            
            <div class="overflow-hidden">
                <div class="flex transition-transform duration-700 cubic-bezier(0.4, 0, 0.2, 1)"
                     :style="'transform: translateX(-' + (activePage - 1) * 100 + '%)'">
                    
                    @forelse ($projectChunks as $chunk)
                        <div class="min-w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-1">
                            @foreach ($chunk as $p)
                                <div class="group relative bg-slate-900 border border-slate-800 rounded-2xl overflow-hidden hover:border-indigo-500/50 transition-all duration-300 hover:shadow-2xl hover:shadow-indigo-500/10 hover:-translate-y-1">
                                    
                                    <div class="aspect-[16/10] overflow-hidden relative bg-slate-800">
                                        <img src="{{ asset('storage/' . $p->image) }}" 
                                             class="w-full h-full object-cover transition duration-700 ease-in-out group-hover:scale-110 grayscale group-hover:grayscale-0 opacity-80 group-hover:opacity-100" 
                                             alt="{{ $p->title }}">
                                        
                                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-90"></div>
                                        
                                        <div class="absolute top-4 right-4 translate-x-10 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-300">
                                            <div class="w-8 h-8 rounded-full bg-indigo-600 text-white flex items-center justify-center shadow-lg">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="p-6 relative">
                                        <div class="absolute top-0 left-6 right-6 h-px bg-slate-800 group-hover:bg-indigo-500/30 transition-colors"></div>

                                        <div class="flex justify-between items-start mb-2">
                                            <h3 class="text-lg font-bold text-white uppercase tracking-tight group-hover:text-indigo-400 transition-colors line-clamp-1">
                                                {{ $p->title }}
                                            </h3>
                                        </div>

                                        <p class="text-slate-400 text-xs font-medium leading-relaxed line-clamp-2 h-8 mb-4">
                                            {{ $p->desc }}
                                        </p>

                                        <div class="flex items-center gap-2 pt-4 border-t border-slate-800/50">
                                            <span class="text-[10px] font-bold text-slate-500 uppercase tracking-wider">Stack:</span>
                                            <div class="flex gap-1">
                                                <span class="px-1.5 py-0.5 rounded bg-slate-800 border border-slate-700 text-[9px] font-mono text-slate-300 group-hover:border-indigo-500/30 transition-colors">Laravel</span>
                                                <span class="px-1.5 py-0.5 rounded bg-slate-800 border border-slate-700 text-[9px] font-mono text-slate-300 group-hover:border-indigo-500/30 transition-colors">Tailwind</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @empty
                        <div class="w-full flex flex-col items-center justify-center py-20 min-h-[400px]">
                            <div class="w-16 h-16 rounded-full bg-slate-900 border border-slate-800 flex items-center justify-center mb-4 text-slate-600">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                            </div>
                            <p class="text-slate-500 font-mono text-sm uppercase tracking-widest">Database Empty. No Projects Found.</p>
                        </div>
                    @endforelse

                </div>
            </div>

            {{-- PAGINATION INDICATORS --}}
            @if($projectChunks->count() > 1)
            <div class="flex justify-center mt-16 space-x-2">
                @foreach ($projectChunks as $index => $chunk)
                    <button @click="activePage = {{ $index + 1 }}" 
                            :class="activePage === {{ $index + 1 }} ? 'bg-indigo-500 w-8 opacity-100 shadow-[0_0_10px_rgba(99,102,241,0.5)]' : 'bg-slate-700 w-2 opacity-50 hover:bg-slate-600'" 
                            class="h-2 rounded-full transition-all duration-500 ease-out focus:outline-none"></button>
                @endforeach
            </div>
            @endif

        </div>
    </section>

</div>
@endsection