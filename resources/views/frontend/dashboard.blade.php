@extends('frontend.layout')
@section('title')
    Home
@endsection
@section('content')

    <section class="w-full">
    <div x-data="{ active: 1, total: 3 }" class="relative w-full overflow-hidden bg-gray-900">
        
        <div class="flex transition-transform duration-700 ease-in-out" 
             :style="'transform: translateX(-' + (active - 1) * 100 + '%)'">
            
            <div class="min-w-full h-87.5 md:h-137.5 relative">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" class="w-full h-full object-cover opacity-60" alt="Mulai Ngoding">
                <div class="absolute bottom-16 left-1/2 -translate-x-1/2 w-full px-10 text-center">
                    <h2 class="text-white text-2xl md:text-4xl font-black uppercase tracking-tighter">Mulai Ngoding</h2>
                    <p class="text-gray-300 mt-4 text-lg md:text-2xl font-medium">Bangun masa depan di ADTCODE.</p>
                </div>
            </div>

            <div class="min-w-full h-87.5 md:h-137.5 relative">
                <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c" class="w-full h-full object-cover opacity-60" alt="Fokus Backend">
                <div class="absolute bottom-16 left-1/2 -translate-x-1/2 w-full px-10 text-center">
                    <h2 class="text-white text-2xl md:text-4xl font-black uppercase tracking-tighter">Fokus Backend</h2>
                    <p class="text-gray-300 mt-4 text-lg md:text-2xl font-medium">Kuasai Laravel 12 secara mendalam.</p>
                </div>
            </div>

            <div class="min-w-full h-87.5 md:h-137.5 relative">
                <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159" class="w-full h-full object-cover opacity-60" alt="UI Modern">
                <div class="absolute bottom-16 left-1/2 -translate-x-1/2 w-full px-10 text-center">
                    <h2 class="text-white text-2xl md:text-4xl font-black uppercase tracking-tighter">UI Modern</h2>
                    <p class="text-gray-300 mt-4 text-lg md:text-2xl font-medium">Desain responsif dengan Tailwind CSS.</p>
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
<section x-data="{ activePage: 1 }" class="w-full bg-white py-20">
    
    <div class="text-center mb-16 px-6">
        <h2 class="text-2xl md:text-4xl font-black uppercase tracking-tighter italic text-gray-900">
            My <span class="text-blue-600">Projects</span>
        </h2>
        <div class="w-32 h-3 bg-blue-600 mx-auto mt-4"></div>
    </div>

    <div class="relative w-full overflow-hidden">
        <div class="flex transition-transform duration-700 ease-in-out"
             :style="'transform: translateX(-' + (activePage - 1) * 100 + '%)'">
            
            <div class="min-w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-2">
                <div class="bg-gray-50 border border-gray-200 group">
                    <div class="h-72 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="text-2xl font-bold uppercase tracking-tighter">Laravel POS</h3>
                        <p class="text-gray-500 mt-2 text-sm">Sistem kasir digital SMK Wikrama.</p>
                    </div>
                </div>
                <div class="bg-gray-50 border border-gray-200 group">
                    <div class="h-72 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581291518066-107747e997f9" class="w-full h-full object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8 text-center">
                        <h3 class="text-2xl font-bold uppercase tracking-tighter">Tailwind UI</h3>
                        <p class="text-gray-500 mt-2 text-sm">Landing page tanpa border radius.</p>
                    </div>
                </div>
                <div class="bg-gray-50 border border-gray-200 group invisible lg:visible">
                    <div class="h-72 overflow-hidden"><img src="https://images.unsplash.com/photo-1542751371-adc38448a05e" class="w-full h-full object-cover"></div>
                    <div class="p-8 text-center"><h3 class="text-2xl font-bold uppercase tracking-tighter">Cobblemon Mod</h3><p class="text-gray-500 mt-2 text-sm">Java Edition Custom Tools.</p></div>
                </div>
                <div class="bg-gray-50 border border-gray-200 group invisible lg:visible">
                    <div class="h-72 overflow-hidden"><img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c" class="w-full h-full object-cover"></div>
                    <div class="p-8 text-center"><h3 class="text-2xl font-bold uppercase tracking-tighter">Rank Stats</h3><p class="text-gray-500 mt-2 text-sm">Mobile Legends Dashboard.</p></div>
                </div>
            </div>

            <div class="min-w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-2 text-center">
                <div class="bg-blue-600 flex items-center justify-center text-white text-3xl font-black h-[450px]">PAGE 2 - CARD 5</div>
                <div class="bg-blue-700 flex items-center justify-center text-white text-3xl font-black h-[450px]">PAGE 2 - CARD 6</div>
                <div class="bg-blue-800 flex items-center justify-center text-white text-3xl font-black h-[450px]">PAGE 2 - CARD 7</div>
                <div class="bg-blue-900 flex items-center justify-center text-white text-3xl font-black h-[450px]">PAGE 2 - CARD 8</div>
            </div>

        </div>
    </div>

    <div class="flex justify-center mt-12 space-x-4">
        <button @click="activePage = 1" 
                :class="activePage === 1 ? 'bg-blue-600 w-16 rounded-full' : 'bg-gray-300 w-4 rounded-full'" 
                class="h-2 transition-all duration-500 ease-in-out"></button>
        <button @click="activePage = 2" 
                :class="activePage === 2 ? 'bg-blue-600 w-16 rounded-full' : 'bg-gray-300 w-4 rounded-full'" 
                class="h-2 transition-all duration-500 ease-in-out"></button>
    </div>

</section>

<section class="w-full bg-white py-16 px-6 border-t border-gray-100">
    <div class="max-w-6xl mx-auto">
        <div class="mb-12">
            <h2 class="text-2xl md:text-4xl font-black uppercase tracking-tighter italic text-gray-900">
                About <span class="text-blue-600">Me.</span>
            </h2>
            <div class="w-16 h-2 bg-blue-600 mt-2"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            <div class="space-y-6">
                <p class="text-xl font-bold text-gray-800 leading-tight">
                    Halo! Saya **Aditya**, seorang pelajar SMK yang berfokus pada dunia pengembangan web.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Sebagai seorang **anak codingers**, saya aktif mendalami **Laravel 12** dan **Tailwind CSS** untuk membangun sistem yang fungsional. Saya percaya kreativitas dimulai dari baris kode yang rapi.
                </p>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Selain fokus di depan layar, saya mengikuti ekstrakurikuler **Hapkido** dan sedang bersiap untuk **UKT di bulan Juli** mendatang.
                </p>
                
                <div class="pt-4 grid grid-cols-2 gap-4">
                    <div class="border border-gray-200 p-4">
                        <span class="block text-[10px] font-black uppercase text-blue-600 tracking-widest">Education</span>
                        <span class="text-gray-900 font-bold text-sm">SMK Wikrama</span>
                    </div>
                    <div class="border border-gray-200 p-4">
                        <span class="block text-[10px] font-black uppercase text-blue-600 tracking-widest">Focus</span>
                        <span class="text-gray-900 font-bold text-sm">Web Dev</span>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 border border-gray-200 p-8">
                <h3 class="text-xl font-black uppercase tracking-tighter mb-6 italic">Life Outside Code</h3>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-600 text-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 011-1h1a2 2 0 100-4H7a1 1 0 01-1-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold uppercase tracking-tight">Gaming</h4>
                            <p class="text-xs text-gray-500 mt-1">Minecraft Java (Cobblemon) & Mobile Legends.</p>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-200 italic text-gray-400 text-xs text-center">
                        "Berusaha mengurangi scrolling **brainrot** dan fokus berkarya."
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-full bg-gray-50 py-16 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="mb-12">
            <h2 class="text-2xl md:text-4xl font-black uppercase tracking-tighter italic text-gray-900">
                Contact <span class="text-blue-600">Me.</span>
            </h2>
            <div class="w-16 h-2 bg-blue-600 mt-2"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-8">
                <div>
                    <h3 class="text-lg font-bold uppercase tracking-tight text-gray-800">Let's Connect</h3>
                    <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                        Punya pertanyaan atau ingin kolaborasi dalam project **Laravel**? Jangan ragu untuk menghubungi saya.
                    </p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-center space-x-4 border border-gray-200 p-4 bg-white">
                        <div class="bg-blue-600 text-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <span class="text-sm font-bold text-gray-700 uppercase">SMK Wikrama, Indonesia</span>
                    </div>

                    <div class="flex items-center space-x-4 border border-gray-200 p-4 bg-white">
                        <div class="bg-blue-600 text-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <span class="text-sm font-bold text-gray-700 lowercase">aditya.mukti@example.com</span>
                    </div>
                </div>

                <p class="text-xs text-gray-400 italic">
                    "Fokus membangun masa depan dengan kode yang berkualitas."
                </p>
            </div>

            <form action="#" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input type="text" placeholder="YOUR NAME" class="w-full border border-gray-300 p-4 text-xs font-bold focus:outline-none focus:border-blue-600 placeholder-gray-400 uppercase tracking-widest">
                    <input type="email" placeholder="YOUR EMAIL" class="w-full border border-gray-300 p-4 text-xs font-bold focus:outline-none focus:border-blue-600 placeholder-gray-400 uppercase tracking-widest">
                </div>
                <input type="text" placeholder="SUBJECT" class="w-full border border-gray-300 p-4 text-xs font-bold focus:outline-none focus:border-blue-600 placeholder-gray-400 uppercase tracking-widest">
                <textarea rows="4" placeholder="YOUR MESSAGE" class="w-full border border-gray-300 p-4 text-xs font-bold focus:outline-none focus:border-blue-600 placeholder-gray-400 uppercase tracking-widest"></textarea>
                
                <button type="submit" class="w-full bg-blue-600 text-white font-black uppercase text-xs py-5 tracking-[0.2em] hover:bg-blue-700 transition-colors duration-300">
                    Send Message &rarr;
                </button>
            </form>
        </div>
    </div>
</section>
@endsection