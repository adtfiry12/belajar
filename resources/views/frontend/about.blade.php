@extends('frontend.layout')
@section('title')
    About
@endsection
@section('content')
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
@endsection