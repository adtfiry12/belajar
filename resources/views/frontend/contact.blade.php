@extends('frontend.layout')

@section('title', 'Contact - ADT CODE')

@section('content')

<div class="bg-slate-950 min-h-screen relative overflow-hidden">
    
    <div class="absolute top-0 left-0 w-full h-96 bg-indigo-900/10 blur-[120px] -z-10 rounded-b-full pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-violet-900/10 blur-[100px] -z-10 rounded-full pointer-events-none"></div>

    {{-- HEADER SECTION --}}
    <section class="relative pt-20 pb-10 px-6 text-center">
        <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight uppercase mb-4">
            Get In <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-500 to-cyan-500">Touch.</span>
        </h2>
        <p class="text-slate-400 max-w-xl mx-auto text-sm md:text-base leading-relaxed">
            Have a project in mind or just want to discuss the latest tech? I'm ready to listen.
        </p>
    </section>

    {{-- CONTENT SECTION --}}
    <section class="w-full py-12 px-6">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">
                
                {{-- LEFT COLUMN: INFO --}}
                <div class="space-y-10">
                    
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-3">
                            {{ $contact->title ?? "Let's Build Something Great" }}
                        </h3>
                        <p class="text-slate-400 leading-relaxed border-l-2 border-indigo-500 pl-4">
                            {{ $contact->desc ?? "I am currently open for freelance projects, collaborations, or full-time opportunities. Don't hesitate to reach out." }}
                        </p>
                    </div>

                    <div class="space-y-6">
                        
                        <div class="group flex items-center gap-5 p-4 rounded-2xl hover:bg-slate-900/50 border border-transparent hover:border-slate-800 transition-all duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-slate-900 border border-slate-800 text-indigo-500 group-hover:bg-indigo-600 group-hover:text-white transition-colors shadow-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase text-slate-500 tracking-widest mb-1">Base Location</span>
                                <span class="text-white font-semibold text-lg">{{ $about->alamat ?? 'Indonesia' }}</span>
                            </div>
                        </div>

                        <div class="group flex items-center gap-5 p-4 rounded-2xl hover:bg-slate-900/50 border border-transparent hover:border-slate-800 transition-all duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-slate-900 border border-slate-800 text-indigo-500 group-hover:bg-indigo-600 group-hover:text-white transition-colors shadow-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase text-slate-500 tracking-widest mb-1">Email Address</span>
                                <span class="text-white font-semibold text-lg">{{ $about->email ?? 'mail@example.com' }}</span>
                            </div>
                        </div>

                        <div class="group flex items-center gap-5 p-4 rounded-2xl hover:bg-slate-900/50 border border-transparent hover:border-slate-800 transition-all duration-300">
                            <div class="w-12 h-12 flex items-center justify-center rounded-xl bg-slate-900 border border-slate-800 text-indigo-500 group-hover:bg-indigo-600 group-hover:text-white transition-colors shadow-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase text-slate-500 tracking-widest mb-1">Phone / WA</span>
                                <span class="text-white font-semibold text-lg">{{ $about->no_telp ?? '-' }}</span>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- RIGHT COLUMN: FORM --}}
                <div class="bg-slate-900/50 backdrop-blur-xl border border-slate-800 rounded-3xl p-8 md:p-10 shadow-2xl relative">
                    
                    <div class="flex items-center justify-between mb-8">
                        <h4 class="text-white font-bold text-lg">Send Message</h4>
                    </div>

                    <form action="{{ route('admin.message.store') }}" method="POST" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" 
                                    class="w-full bg-slate-950/50 border border-slate-700 text-white p-4 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition-all placeholder:text-slate-700">
                                @error('name') <p class="text-red-500 text-[10px] font-bold mt-1 uppercase tracking-wider">! {{ $message }}</p> @enderror
                            </div>
                            <div class="space-y-2">
                                <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="john@example.com" 
                                    class="w-full bg-slate-950/50 border border-slate-700 text-white p-4 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition-all placeholder:text-slate-700">
                                @error('email') <p class="text-red-500 text-[10px] font-bold mt-1 uppercase tracking-wider">! {{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Project Collaboration..." 
                                class="w-full bg-slate-950/50 border border-slate-700 text-white p-4 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition-all placeholder:text-slate-700">
                            @error('subject') <p class="text-red-500 text-[10px] font-bold mt-1 uppercase tracking-wider">! {{ $message }}</p> @enderror
                        </div>

                        <div class="space-y-2">
                            <label class="text-[10px] font-bold text-slate-400 uppercase tracking-widest ml-1">Message</label>
                            <textarea name="message" rows="5" placeholder="Tell me details about your project..." 
                                class="w-full bg-slate-950/50 border border-slate-700 text-white p-4 rounded-xl focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 outline-none transition-all placeholder:text-slate-700 resize-none">{{ old('message') }}</textarea>
                            @error('message') <p class="text-red-500 text-[10px] font-bold mt-1 uppercase tracking-wider">! {{ $message }}</p> @enderror
                        </div>
                        
                        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-4 rounded-xl transition-all shadow-lg shadow-indigo-600/20 active:scale-[0.98] flex items-center justify-center gap-2 group">
                            <span class="tracking-widest uppercase text-xs">Send Message</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection