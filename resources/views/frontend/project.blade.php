@extends('frontend.layout')
@section('title')
    Project
@endsection
@section('content')
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
@endsection