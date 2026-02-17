@extends('frontend.layout')
@section('title', 'About')
@section('content')
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