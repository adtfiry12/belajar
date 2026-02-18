@extends('frontend.layout')
@section('title', 'Home - ADT CODE')

@section('content')

{{-- HERO SECTION (SLIDER REIMAGINED) --}}
<section class="relative w-full border-b border-slate-800">
    <div x-data="{ active: 1, total: 3 }" class="relative w-full h-[600px] overflow-hidden bg-slate-950">
        
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
        
        <div class="absolute inset-0 transition-transform duration-700 ease-out" 
             :style="'transform: translateX(-' + (active - 1) * 100 + '%)'">
             <div class="flex h-full w-[300%]"> @foreach ($slides as $s)
                @if ($loop->iteration > 3) @break @endif
                <div class="w-1/3 h-full relative flex items-center">
                    <div class="absolute inset-0">
                        <img src="{{ asset('storage/' . $s->image) }}" class="w-full h-full object-cover opacity-40 grayscale hover:grayscale-0 transition-all duration-700" alt="Slide Image">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/80 to-transparent"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/50 to-transparent"></div>
                    </div>

                    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 w-full">
                        <div class="max-w-2xl">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 text-xs font-bold tracking-widest uppercase mb-6">
                                <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
                                Featured Content
                            </div>
                            <h2 class="text-4xl md:text-6xl font-black text-white leading-tight tracking-tight mb-6">
                                {{ $s->title }}
                            </h2>
                            <p class="text-lg text-slate-400 font-light leading-relaxed mb-8 border-l-2 border-indigo-600 pl-6">
                                {{ $s->desc }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach

             </div>
        </div>

        <div class="absolute bottom-12 right-6 md:right-12 flex gap-4 z-20">
            <button @click="active = active === 1 ? total : active - 1" 
                    class="w-12 h-12 flex items-center justify-center rounded-full border border-slate-700 bg-slate-900/50 text-white hover:bg-indigo-600 hover:border-indigo-600 hover:scale-110 transition-all backdrop-blur-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button @click="active = active === total ? 1 : active + 1" 
                    class="w-12 h-12 flex items-center justify-center rounded-full border border-slate-700 bg-slate-900/50 text-white hover:bg-indigo-600 hover:border-indigo-600 hover:scale-110 transition-all backdrop-blur-sm">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>

{{-- PROJECTS SECTION --}}
@php $projectChunks = $projects->chunk(4); @endphp
<section x-data="{ activePage: 1, totalPages: {{ $projectChunks->count() }} }" class="w-full bg-slate-950 py-24 relative overflow-hidden">
    
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-indigo-600/5 rounded-full blur-3xl -z-10"></div>

    <div class="max-w-7xl mx-auto px-6 mb-16 flex flex-col md:flex-row justify-between items-end gap-6">
        <div>
            <h2 class="text-3xl md:text-5xl font-black text-white tracking-tight">
                SELECTED <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-violet-400">PROJECTS</span>
            </h2>
            <p class="mt-4 text-slate-400 max-w-xl">
                A collection of backend systems, APIs, and web applications I've engineered.
            </p>
        </div>
        
        @if($projectChunks->count() > 1)
        <div class="flex space-x-2">
            @foreach ($projectChunks as $index => $chunk)
                <button @click="activePage = {{ $index + 1 }}" 
                        :class="activePage === {{ $index + 1 }} ? 'bg-indigo-500 w-8' : 'bg-slate-800 w-2 hover:bg-slate-700'" 
                        class="h-2 rounded-full transition-all duration-300"></button>
            @endforeach
        </div>
        @endif
    </div>

    <div class="relative w-full overflow-hidden">
        <div class="flex transition-transform duration-700 ease-in-out" :style="'transform: translateX(-' + (activePage - 1) * 100 + '%)'">
            
            @forelse ($projectChunks as $chunk)
                <div class="min-w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 px-6 lg:px-8">
                    @foreach ($chunk as $p)
                        <div class="group relative bg-slate-900 border border-slate-800/50 rounded-2xl overflow-hidden hover:border-indigo-500/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:shadow-indigo-500/10">
                            <div class="h-48 overflow-hidden relative">
                                <img src="{{ asset('storage/' . $p->image) }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-700 grayscale group-hover:grayscale-0" alt="{{ $p->title }}">
                                <div class="absolute inset-0 bg-slate-950/20 group-hover:bg-transparent transition-colors"></div>
                            </div>
                            
                            <div class="p-6">
                                <div class="flex justify-between items-start mb-4">
                                    <h3 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors line-clamp-1">{{ $p->title }}</h3>
                                    <svg class="w-5 h-5 text-slate-600 group-hover:text-white transition-colors transform group-hover:translate-x-1 group-hover:-translate-y-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </div>
                                <p class="text-slate-400 text-xs leading-relaxed line-clamp-2 mb-4 h-8">
                                    {{ $p->desc }}
                                </p>
                                <div class="pt-4 border-t border-slate-800 flex items-center gap-2">
                                    <span class="px-2 py-1 text-[10px] font-medium bg-slate-800 text-slate-300 rounded">Laravel</span>
                                    <span class="px-2 py-1 text-[10px] font-medium bg-slate-800 text-slate-300 rounded">MySQL</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @empty
                <div class="w-full text-center py-20">
                    <p class="text-slate-600 font-mono text-sm">System: No active projects deployed.</p>
                </div>
            @endforelse

        </div>
    </div>
</section>


{{-- ABOUT SECTION --}}
@if($about)
<section class="w-full bg-slate-900 py-24 px-6 border-y border-slate-800 relative overflow-hidden">
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="mb-12 text-center md:text-left relative z-10">
            <h2 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight">
                About <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-cyan-500">Me.</span>
            </h2>
            <div class="h-1 w-20 bg-indigo-600 mt-4 rounded-full mx-auto md:mx-0"></div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20 items-center">
            
            <div class="lg:col-span-5 order-1">
                <div class="relative group">
                    <div class="absolute -inset-2 bg-gradient-to-tr from-slate-800 to-slate-900 rounded-[2rem] border border-slate-700/50"></div>
                    <div class="relative aspect-[4/5] rounded-[1.8rem] overflow-hidden bg-slate-800 shadow-2xl">
                        @if($about->photo)
                            <img src="{{ asset('storage/' . $about->photo) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="{{ $about->name }}">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-60"></div>
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-500 font-mono text-xs bg-slate-800">
                                // NO_IMAGE
                            </div>
                        @endif
                    </div>
                    
                    <div class="absolute bottom-6 right-6 bg-slate-950/80 backdrop-blur-md border border-slate-800 p-4 rounded-xl shadow-xl">
                        <p class="text-[10px] text-slate-400 uppercase tracking-widest font-bold">Experience</p>
                        <p class="text-white font-bold text-xl">2+ Years</p>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-7 space-y-8 order-2">
                <div>
                    <div class="inline-flex items-center space-x-2 mb-6 px-3 py-1 rounded-full bg-indigo-900/30 border border-indigo-500/30 text-indigo-300">
                        <span class="w-2 h-2 rounded-full bg-indigo-400 animate-pulse"></span>
                        <span class="text-xs font-bold tracking-widest uppercase">{{ $about->role }}</span>
                    </div>
                    
                    <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight mb-6">
                        HELLO, I'M <br> 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">{{ $about->name }}</span>
                    </h2>
                    
                    <p class="text-xl text-slate-300 font-light leading-relaxed border-l-4 border-indigo-500 pl-6">
                        "{{ $about->title }}"
                    </p>
                </div>

                <div class="text-slate-400 text-base leading-7 font-normal">
                    {!! nl2br(e($about->desc)) !!}
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-6 border-t border-slate-800/50">
                    <div>
                        <span class="block text-xs font-bold uppercase text-slate-500 tracking-widest mb-1">Education</span>
                        <span class="text-white font-semibold">{{ $about->study }}</span>
                    </div>
                    <div>
                        <span class="block text-xs font-bold uppercase text-slate-500 tracking-widest mb-1">Location</span>
                        <span class="text-white font-semibold">{{ $about->alamat }}</span>
                    </div>
                </div>

                <div class="pt-4">
                    <span class="text-xs font-bold uppercase text-slate-500 tracking-widest mb-4 block">Connect With Me</span>
                    <div class="flex flex-wrap gap-3">
                        @if($about->github)
                            <a href="{{ $about->github }}" target="_blank" class="flex items-center gap-3 px-5 py-3 bg-slate-800 hover:bg-white hover:text-black text-slate-300 rounded-lg transition-all duration-300 group border border-slate-700 hover:border-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                                <span class="text-sm font-bold">GitHub</span>
                            </a>
                        @endif
                        @if($about->linkedin)
                            <a href="{{ $about->linkedin }}" target="_blank" class="flex items-center gap-3 px-5 py-3 bg-slate-800 hover:bg-[#0077b5] hover:text-white text-slate-300 rounded-lg transition-all duration-300 group border border-slate-700 hover:border-[#0077b5]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                <span class="text-sm font-bold">LinkedIn</span>
                            </a>
                        @endif
                        @if($about->instagram)
                            <a href="{{ $about->instagram }}" target="_blank" class="flex items-center gap-3 px-5 py-3 bg-slate-800 hover:bg-pink-600 hover:text-white text-slate-300 rounded-lg transition-all duration-300 group border border-slate-700 hover:border-pink-600">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.85s-.011 3.584-.069 4.85c-.148 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07s-3.584-.012-4.85-.07c-3.26-.148-4.771-1.699-4.919-4.919-.058-1.265-.07-1.644-.07-4.85s.012-3.584.07-4.85c.148-3.204 1.671-4.771 4.919-4.919 1.266-.057 1.645-.069 4.85-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                <span class="text-sm font-bold">Instagram</span>
                            </a>
                        @endif
                        @if($about->facebook)
                            <a href="{{ $about->facebook }}" target="_blank" class="flex items-center gap-3 px-5 py-3 bg-slate-800 hover:bg-[#1877F2] hover:text-white text-slate-300 rounded-lg transition-all duration-300 group border border-slate-700 hover:border-[#1877F2]">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>
                                </svg>
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


{{-- CONTACT SECTION (CLEAN & MODERN CARD) --}}
<section class="w-full bg-slate-950 py-24 px-6 relative">
    <div class="max-w-7xl mx-auto">
        
        <div class="mb-16 text-center md:text-left">
            <h2 class="text-3xl md:text-5xl font-black text-white uppercase tracking-tight">
                GET IN <span class="text-indigo-500">TOUCH</span>
            </h2>
            <div class="h-1 w-20 bg-indigo-600 mt-4 rounded-full mx-auto md:mx-0"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <div class="space-y-12">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4">
                        {{ $contact->title ?? "Let's Start a Conversation" }}
                    </h3>
                    <p class="text-slate-400 text-lg leading-relaxed">
                        {{ $contact->desc ?? "I'm currently available for freelance projects. Whether you have a question or just want to say hi, I'll try my best to get back to you!" }}
                    </p>
                </div>

                <div class="space-y-8">
                    <div class="flex items-start gap-6 group">
                        <div class="flex-shrink-0 w-14 h-14 flex items-center justify-center rounded-2xl bg-indigo-500/10 text-indigo-500 border border-indigo-500/20 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-1 group-hover:text-indigo-400 transition-colors">Location</h4>
                            <p class="text-slate-400">{{ $about->alamat ?? 'Indonesia' }}</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-6 group">
                        <div class="flex-shrink-0 w-14 h-14 flex items-center justify-center rounded-2xl bg-indigo-500/10 text-indigo-500 border border-indigo-500/20 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-1 group-hover:text-indigo-400 transition-colors">Email</h4>
                            <p class="text-slate-400">{{ $about->email ?? 'mail@example.com' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-slate-900/50 backdrop-blur-sm p-8 md:p-10 rounded-3xl border border-slate-800 shadow-2xl">
                <form action="{{ route('admin.message.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Your Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" 
                                class="w-full bg-slate-950/50 border border-slate-700 text-slate-200 p-4 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none transition-all placeholder:text-slate-600">
                            @error('name') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Your Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="john@example.com" 
                                class="w-full bg-slate-950/50 border border-slate-700 text-slate-200 p-4 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none transition-all placeholder:text-slate-600">
                            @error('email') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Subject</label>
                        <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Project Inquiry..." 
                            class="w-full bg-slate-950/50 border border-slate-700 text-slate-200 p-4 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none transition-all placeholder:text-slate-600">
                        @error('subject') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-slate-400 uppercase tracking-widest ml-1">Message</label>
                        <textarea name="message" rows="5" placeholder="Tell me about your project..." 
                            class="w-full bg-slate-950/50 border border-slate-700 text-slate-200 p-4 rounded-xl focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 outline-none transition-all placeholder:text-slate-600 resize-none">{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
                    </div>
                    
                    <button type="submit" class="w-full bg-indigo-600 text-white font-bold py-4 rounded-xl hover:bg-indigo-500 transition-all shadow-lg shadow-indigo-600/20 active:scale-[0.98] flex items-center justify-center gap-2 group">
                        <span>Send Message</span>
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

@endsection