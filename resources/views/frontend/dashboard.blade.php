@extends('frontend.layout')
@section('title', 'Home')
@section('content')


{{-- sliders --}}
    <section class="w-full">
    <div x-data="{ active: 1, total: 3 }" class="relative w-full overflow-hidden bg-gray-900">
        
        <div class="flex transition-transform duration-700 ease-in-out" 
             :style="'transform: translateX(-' + (active - 1) * 100 + '%)'">
            
            @foreach ($slides as $s)
            @if ($loop->iteration > 3)
                @break
            @endif
            <div class="min-w-full h-87.5 md:h-137.5 relative">
                <img src="{{ asset('storage/' . $s->image) }}" class="w-full h-full object-cover opacity-60" alt="Mulai Ngoding">
                <div class="absolute bottom-16 left-1/2 -translate-x-1/2 w-full px-10 text-center">
                    <h2 class="text-white text-2xl md:text-4xl font-black uppercase tracking-tighter">{{ $s->title }}</h2>
                    <p class="text-gray-300 mt-4 text-lg md:text-2xl font-medium">{{ $s->desc }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <button @click="active = active === 1 ? total : active - 1" 
                class="absolute top-1/2 left-8 -translate-y-1/2 bg-white/10 hover:bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center backdrop-blur-md transition-all border border-white/20 shadow-2xl z-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>

        <button @click="active = active === total ? 1 : active + 1" 
                class="absolute top-1/2 right-8 -translate-y-1/2 bg-white/10 hover:bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center backdrop-blur-md transition-all border border-white/20 shadow-2xl z-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>

    </div>
</section>


{{-- project --}}
@php
    $projectChunks = $projects->chunk(4);
@endphp
<section x-data="{ activePage: 1, totalPages: {{ $projectChunks->count() }} }" class="w-full bg-white py-20 border-t border-gray-50">
    
    <div class="text-center mb-16 px-6">
        <h2 class="text-2xl md:text-4xl font-black uppercase tracking-tighter italic text-gray-900">
            My <span class="text-blue-600">Projects</span>
        </h2>
    </div>

    <div class="relative w-full overflow-hidden">
        <div class="flex transition-transform duration-700 ease-in-out"
             :style="'transform: translateX(-' + (activePage - 1) * 100 + '%)'">
            
            @forelse ($projectChunks as $chunk)
                <div class="min-w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-6 md:px-12">
                    @foreach ($chunk as $p)
                        <div class="bg-gray-50 border border-gray-100 group transition-all hover:shadow-xl hover:-translate-y-2 rounded-xl overflow-hidden">
                            <div class="h-64 overflow-hidden relative">
                                <img src="{{ asset('storage/' . $p->image) }}" 
                                    class="w-full h-full object-cover group-hover:scale-110 transition duration-700" 
                                    alt="{{ $p->title }}">
                            </div>
                            
                            <div class="p-8 text-center bg-white">
                                <h3 class="text-xl font-black uppercase tracking-tighter text-gray-900">{{ $p->title }}</h3>
                                <p class="text-gray-500 mt-2 text-xs font-medium leading-relaxed italic uppercase line-clamp-2">
                                    {{ $p->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @empty
                <div class="w-full text-center py-20">
                    <p class="text-gray-400 font-bold italic uppercase tracking-widest text-sm">No project deployments detected.</p>
                </div>
            @endforelse

        </div>
    </div>

    @if($projectChunks->count() > 1)
    <div class="flex justify-center mt-12 space-x-3">
        @foreach ($projectChunks as $index => $chunk)
            <button @click="activePage = {{ $index + 1 }}" 
                    :class="activePage === {{ $index + 1 }} ? 'bg-blue-600 w-12' : 'bg-gray-200 w-3 hover:bg-blue-300'" 
                    class="h-2 rounded-full transition-all duration-500 ease-in-out focus:outline-none"></button>
        @endforeach
    </div>
    @endif

</section>


{{-- about  --}}
@if($about)
<section class="w-full bg-white py-24 px-6 border-t border-gray-50">
    <div class="max-w-5xl mx-auto">

        <div class="mb-16">
            <h2 class="text-2xl md:text-4xl font-black uppercase tracking-tighter italic text-gray-900">
                About <span class="text-blue-600">Me.</span>
            </h2>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">
            
            <div class="lg:col-span-5">
                <div class="relative group">
                    <div class="aspect-4/5 rounded-[3rem] overflow-hidden bg-gray-50 border-[6px] border-white shadow-xl shadow-gray-200/50 transition-transform duration-500 group-hover:scale-[1.01]">
                        @if($about->photo)
                            <img src="{{ asset('storage/' . $about->photo) }}" 
                                class="w-full h-full object-cover" 
                                alt="{{ $about->name }}">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-slate-50 text-slate-300 font-black uppercase tracking-widest text-xs">
                                No Image
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="h-0.5 w-8 bg-blue-600"></div>
                        <span class="text-blue-600 font-black uppercase tracking-[0.3em] text-[11px]">
                            {{ $about->role }}
                        </span>
                    </div>
                    <h2 class="text-3xl font-black text-gray-900 uppercase tracking-tighter leading-none mb-6">
                        {{ $about->name }}
                    </h2>
                    <p class="text-lg text-gray-500 font-medium italic leading-relaxed">
                        "{{ $about->title }}"
                    </p>
                </div>

                <div class="text-gray-600 text-[15px] leading-relaxed space-y-4 font-normal">
                    {!! nl2br(e($about->desc)) !!}
                </div>

                <div class="py-6 border-t border-b border-gray-100 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <span class="block text-[10px] font-black uppercase text-gray-400 tracking-widest mb-2">Education Base</span>
                        <span class="text-gray-900 font-bold text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-blue-600 mr-2"><path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-1.05.174v-4.102l2.168-.929L10 18.476l-4.172-1.827a9.025 9.025 0 00-4.528.175A11.026 11.026 0 002.25 17a1 1 0 00.94 1.292h13.62a1 1 0 00.94-1.292 11.026 11.026 0 00.95-3.817z"/></svg>
                            {{ $about->study }}
                        </span>
                    </div>
                    <div>
                        <span class="block text-[10px] font-black uppercase text-gray-400 tracking-widest mb-2">Based In</span>
                        <span class="text-gray-900 font-bold text-sm flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-blue-600 mr-2"><path fill-rule="evenodd" d="M9.69 18.933l.003.001C9.89 19.02 10 19 10 19s.11.02.308-.066l.002-.001.006-.003.018-.008a5.741 5.741 0 00.281-.14c.186-.096.446-.24.757-.433.62-.384 1.445-.966 2.274-1.765C15.302 14.988 17 12.493 17 9A7 7 0 103 9c0 3.493 1.698 5.988 3.355 7.62.829.799 1.654 1.38 2.274 1.765a5.741 5.741 0 00.757.433l.018.008.006.003zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                            {{ $about->alamat }}
                        </span>
                    </div>
                </div>

                <div class="pt-2">
                    <span class="text-[10px] font-black uppercase text-gray-400 tracking-widest mb-4 block">Digital Connectors</span>
                    <div class="flex items-center gap-3">
                        @if($about->github)
                            <a href="{{ $about->github }}" target="_blank" class="group w-12 h-12 flex items-center justify-center bg-gray-50 text-gray-900 rounded-xl border border-gray-200 hover:bg-gray-900 hover:text-white hover:border-gray-900 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="group-hover:scale-110 transition-transform"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        @endif
                        @if($about->linkedin)
                            <a href="{{ $about->linkedin }}" target="_blank" class="group w-12 h-12 flex items-center justify-center bg-gray-50 text-blue-700 rounded-xl border border-gray-200 hover:bg-blue-700 hover:text-white hover:border-blue-700 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="group-hover:scale-110 transition-transform"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </a>
                        @endif
                        @if($about->instagram)
                            <a href="{{ $about->instagram }}" target="_blank" class="group w-12 h-12 flex items-center justify-center bg-gray-50 text-pink-600 rounded-xl border border-gray-200 hover:bg-pink-600 hover:text-white hover:border-pink-600 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="group-hover:scale-110 transition-transform"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.26-.148-4.771-1.699-4.919-4.919-.058-1.265-.07-1.644-.07-4.85s.012-3.584.07-4.85c.148-3.204 1.671-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </a>
                        @endif
                        @if($about->facebook)
                            <a href="{{ $about->facebook }}" target="_blank" class="group w-12 h-12 flex items-center justify-center bg-gray-50 text-blue-800 rounded-xl border border-gray-200 hover:bg-blue-800 hover:text-white hover:border-blue-800 transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="group-hover:scale-110 transition-transform"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif

<section class="w-full bg-gray-50 py-20 px-6 border-t border-gray-100">
    <div class="max-w-6xl mx-auto">
        
        <div class="mb-16">
            <h2 class="text-2xl md:text-4xl font-black uppercase tracking-tighter italic text-gray-900">
                Contact <span class="text-blue-600">Me.</span>
            </h2>
            <div class="w-16 h-2 bg-blue-600 mt-2 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <div class="space-y-10">
                <div>
                    <h3 class="text-xl font-black uppercase tracking-tight text-gray-900 italic">
                        {{ $contact->title ?? "Let's Connect" }}
                    </h3>
                    <p class="text-gray-500 mt-4 text-sm leading-relaxed font-medium">
                        {{ $contact->desc ?? "Punya pertanyaan atau ingin kolaborasi?" }}
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center space-x-4 border border-gray-200 p-5 bg-white rounded-xl shadow-sm">
                        <div class="bg-blue-600 text-white p-2.5 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <span class="text-xs font-bold text-gray-700 uppercase tracking-tight">{{ $about->alamat ?? 'SMK Wikrama, Indonesia' }}</span>
                    </div>

                    <div class="flex items-center space-x-4 border border-gray-200 p-5 bg-white rounded-xl shadow-sm">
                        <div class="bg-blue-600 text-white p-2.5 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <span class="text-xs font-bold text-gray-700 lowercase tracking-tight">{{ $about->email ?? 'aditya@example.com' }}</span>
                    </div>

                    <div class="flex items-center space-x-4 border border-gray-200 p-5 bg-white rounded-xl shadow-sm">
                        <div class="bg-blue-600 text-white p-2.5 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        </div>
                        <span class="text-xs font-bold text-gray-700 uppercase tracking-tight">{{ $about->no_telp ?? '628xxxx' }}</span>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 border border-gray-100 shadow-xl rounded-2xl">
                <form action="{{ route('admin.message.store') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div class="space-y-1">
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="YOUR NAME" class="w-full border border-gray-200 p-4 text-[10px] font-bold focus:border-blue-600 uppercase tracking-widest rounded-lg">
                            @error('name') <p class="text-[9px] text-red-500 font-black italic uppercase">! {{ $message }}</p> @enderror
                        </div>
                        <div class="space-y-1">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="YOUR EMAIL" class="w-full border border-gray-200 p-4 text-[10px] font-bold focus:border-blue-600 uppercase tracking-widest rounded-lg">
                            @error('email') <p class="text-[9px] text-red-500 font-black italic uppercase">! {{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="space-y-1">
                        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="SUBJECT" class="w-full border border-gray-200 p-4 text-[10px] font-bold focus:border-blue-600 uppercase tracking-widest rounded-lg">
                        @error('subject') <p class="text-[9px] text-red-500 font-black italic uppercase">! {{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-1">
                        <textarea name="message" rows="5" placeholder="YOUR MESSAGE" class="w-full border border-gray-200 p-4 text-[10px] font-bold focus:border-blue-600 uppercase tracking-widest rounded-lg">{{ old('message') }}</textarea>
                        @error('message') <p class="text-[9px] text-red-500 font-black italic uppercase">! {{ $message }}</p> @enderror
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white font-black uppercase text-[10px] py-5 rounded-xl tracking-[0.3em] hover:bg-gray-900 transition-all duration-500 shadow-lg shadow-blue-100">
                        Execute Dispatch &rarr;
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection