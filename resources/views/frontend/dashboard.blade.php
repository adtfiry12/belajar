@extends('frontend.layout')
@section('title')
    Home
@endsection
@section('content')
    <section class="w-full">
    <div x-data="{ active: 1, total: 3 }" class="relative w-full overflow-hidden bg-gray-900">
        
        <div class="flex transition-transform duration-700 ease-in-out" 
             :style="'transform: translateX(-' + (active - 1) * 100 + '%)'">
            
            <div class="min-w-full h-[450px] md:h-[750px] relative">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" class="w-full h-full object-cover opacity-60" alt="Mulai Ngoding">
                <div class="absolute bottom-16 left-1/2 -translate-x-1/2 w-full px-10 text-center">
                    <h2 class="text-white text-5xl md:text-8xl font-black uppercase tracking-tighter">Mulai Ngoding</h2>
                    <p class="text-blue-300 mt-4 text-lg md:text-2xl font-medium">Bangun masa depan di ADTCODE.</p>
                </div>
            </div>

            <div class="min-w-full h-[450px] md:h-[750px] relative">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c" class="w-full h-full object-cover opacity-60" alt="Fokus Backend">
                <div class="absolute bottom-16 left-1/2 -translate-x-1/2 w-full px-10 text-center">
                    <h2 class="text-white text-5xl md:text-8xl font-black uppercase tracking-tighter">Fokus Backend</h2>
                    <p class="text-blue-300 mt-4 text-lg md:text-2xl font-medium">Kuasai Laravel 12 secara mendalam.</p>
                </div>
            </div>

            <div class="min-w-full h-[450px] md:h-[750px] relative">
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159" class="w-full h-full object-cover opacity-60" alt="UI Modern">
                <div class="absolute bottom-16 left-1/2 -translate-x-1/2 w-full px-10 text-center">
                    <h2 class="text-white text-5xl md:text-8xl font-black uppercase tracking-tighter">UI Modern</h2>
                    <p class="text-blue-300 mt-4 text-lg md:text-2xl font-medium">Desain responsif dengan Tailwind CSS.</p>
                </div>
            </div>
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
@endsection