<x-app-layout>
    <x-slot name="title">Contact</x-slot>

    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
                {{ __('Contact Configuration') }}
            </h2>
            @if($contacts->isEmpty())
            <a href="#" class="bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest px-6 py-2 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-blue-700 transition-all active:translate-x-0.5 active:translate-y-0.5 active:shadow-none">
                + Set Contact Info
            </a>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            @forelse ($contacts as $contact)
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    
                    <div class="space-y-4">
                        <div class="bg-slate-950 w-16 h-16 flex items-center justify-center border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(37,99,235,1)]">
                            <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-blue-600 italic">Global Location</span>
                            <h3 class="text-2xl font-black text-slate-900 uppercase tracking-tighter mt-1">{{ $contact->title }}</h3>
                        </div>
                    </div>

                    <div class="md:border-l-2 md:border-slate-100 md:pl-8">
                        <span class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-400">Communication Desc</span>
                        <p class="mt-2 text-xs font-bold text-slate-600 uppercase italic leading-relaxed">
                            {{ $contact->desc }}
                        </p>
                    </div>

                    <div class="flex flex-col justify-between items-end">
                        <div class="flex gap-2">
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="p-3 border-2 border-slate-950 bg-yellow-400 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-yellow-500 transition-all active:shadow-none active:translate-x-1 active:translate-y-1">
                                <svg class="w-5 h-5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                            </a>
                        </div>
                        
                        @if($contact->maps_link)
                        <div class="mt-4 w-full">
                            <span class="text-[9px] font-black text-slate-400 uppercase tracking-widest block mb-1">Geographic Link:</span>
                            <a href="{{ $contact->maps_link }}" target="_blank" class="text-[10px] font-black text-blue-600 uppercase hover:underline break-all italic">
                                {{ Str::limit($contact->maps_link, 40) }} &nearr;
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-12 text-center">
                <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 italic">No communication data detected. System disconnected.</p>
            </div>
            @endforelse

        </div>
    </div>
</x-app-layout>