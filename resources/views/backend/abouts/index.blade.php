<x-app-layout>
    <x-slot name="title">About</x-slot>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
                {{ __('Profile Configuration') }}
            </h2>
            @if($abouts->isEmpty())
            <a href="{{ route('admin.about.create') }}" class="bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest px-6 py-2 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-blue-700 transition-all active:translate-x-0.5 active:translate-y-0.5 active:shadow-none">
                + Create Profile
            </a>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            @forelse ($abouts as $about)
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8">
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-shrink-0">
                        <div class="w-48 h-48 bg-slate-100 border-4 border-slate-950 shadow-[6px_6px_0px_0px_rgba(37,99,235,1)] overflow-hidden">
                            @if($about->photo)
                                <img src="{{ asset('storage/' . $about->photo) }}" class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-slate-300 font-black text-xs uppercase">No Photo</div>
                            @endif
                        </div>
                    </div>

                    <div class="flex-1 space-y-4">
                        <div>
                            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-600 italic">{{ $about->role }} | {{ $about->study }}</span>
                            <h3 class="text-3xl font-black text-slate-900 uppercase tracking-tighter mt-1">{{ $about->name }}</h3>
                            <p class="text-xs font-bold text-slate-500 uppercase mt-2 italic">"{{ $about->title }}"</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 border-t-2 border-slate-100 pt-4 text-[10px] font-bold uppercase text-slate-700">
                            <p><span class="text-slate-400">Email:</span> {{ $about->email }}</p>
                            <p><span class="text-slate-400">Phone:</span> {{ $about->no_telp }}</p>
                            <p class="md:col-span-2"><span class="text-slate-400">Address:</span> {{ $about->alamat }}</p>
                        </div>

                        <div class="flex flex-wrap gap-2 pt-2">
                            @if($about->github)<span class="bg-slate-950 text-white px-2 py-1 text-[9px] font-black uppercase italic">GitHub</span>@endif
                            @if($about->linkedin)<span class="bg-blue-600 text-white px-2 py-1 text-[9px] font-black uppercase italic">LinkedIn</span>@endif
                            @if($about->instagram)<span class="bg-pink-600 text-white px-2 py-1 text-[9px] font-black uppercase italic">Instagram</span>@endif
                            @if($about->facebook)<span class="bg-blue-800 text-white px-2 py-1 text-[9px] font-black uppercase italic">Facebook</span>@endif
                        </div>
                    </div>

                    <div class="flex md:flex-col gap-2">
                        <a href="{{ route('admin.about.edit', $about->id) }}" class="p-3 border-2 border-slate-950 bg-yellow-400 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-yellow-500 transition-all active:shadow-none active:translate-x-1 active:translate-y-1">
                            <svg class="w-5 h-5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                        </a>
                        <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST" onsubmit="return confirm('Mission Critical: Registry akan dihapus permanen. Lanjutkan?')">
                            @csrf
                            @method('DELETE')
    
                            <button type="submit" class="p-3 border-2 border-slate-950 bg-red-600 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-red-700 transition-all active:shadow-none active:translate-x-1 active:translate-y-1">
                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="mt-8 p-4 bg-slate-50 border-l-4 border-blue-600 italic">
                    <p class="text-[11px] font-bold text-slate-600 leading-relaxed uppercase">
                        {{ $about->desc }}
                    </p>
                </div>
            </div>
            @empty
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-12 text-center">
                <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 italic">No Identity Data Detected. System Offline.</p>
            </div>
            @endforelse

        </div>
    </div>
</x-app-layout>