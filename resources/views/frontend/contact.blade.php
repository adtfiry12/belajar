@extends('frontend.layout')
@section('title', 'About')
@section('content')
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