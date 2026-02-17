@extends('frontend.layout')
@section('title', 'Project')
@section('content')

    @php
    $projectChunks = $projects->chunk(8);
@endphp

<section x-data="{ activePage: 1 }" class="w-full bg-white py-20">
    
    <div class="text-center mb-16 px-6">
        <h2 class="text-2xl md:text-4xl font-black uppercase tracking-tighter italic text-gray-900">
            My <span class="text-blue-600">Projects</span>
        </h2>
        <div class="w-32 h-2 bg-blue-600 mx-auto mt-4 rounded-full"></div>
    </div>

    <div class="relative w-full overflow-hidden px-4 md:px-12">
        <div class="flex transition-transform duration-700 ease-in-out"
             :style="'transform: translateX(-' + (activePage - 1) * 100 + '%)'">
            
            @forelse ($projectChunks as $chunk)
                <div class="min-w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($chunk as $p)
                        <div class="bg-gray-50 border border-gray-100 group transition-all hover:bg-white hover:shadow-xl rounded-xl overflow-hidden">
                            <div class="aspect-video overflow-hidden">
                                <img src="{{ asset('storage/' . $p->image) }}" 
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-500" 
                                    alt="{{ $p->title }}">
                            </div>
                            
                            <div class="p-6 text-center">
                                <h3 class="text-lg font-black uppercase tracking-tighter text-gray-900 line-clamp-1">{{ $p->title }}</h3>
                                <p class="text-gray-500 mt-2 text-[10px] font-bold uppercase tracking-wider italic line-clamp-2">
                                    {{ $p->desc }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @empty
                <div class="w-full text-center py-20">
                    <p class="text-gray-400 font-bold uppercase tracking-widest italic">Registry empty. No projects found.</p>
                </div>
            @endforelse

        </div>
    </div>

    @if($projectChunks->count() > 1)
    <div class="flex justify-center mt-16 space-x-3">
        @foreach ($projectChunks as $index => $chunk)
            <button @click="activePage = {{ $index + 1 }}" 
                    :class="activePage === {{ $index + 1 }} ? 'bg-blue-600 w-12' : 'bg-gray-200 w-3'" 
                    class="h-2 rounded-full transition-all duration-500 ease-in-out focus:outline-none"></button>
        @endforeach
    </div>
    @endif

</section>
@endsection