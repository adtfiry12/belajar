<x-app-layout>
    <x-slot name="title">Set Contact</x-slot>

    <x-slot name="header">
        <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
            {{ __('Edit Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8">
                
                <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="title" class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2 italic">Contact Title</label>
                        <input type="text" name="title" id="title" value="{{ old('title', $contact->title) }}"
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4 placeholder:text-slate-300 @error('title') border-red-600 shadow-[4px_4px_0px_0px_rgba(220,38,38,1)] @enderror"
                            placeholder="ENTER TITLE CONTACT...">
                        @error('title')
                            <p class="mt-4 text-[9px] font-black text-red-600 uppercase tracking-widest italic animate-pulse">! {{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="desc" class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2 italic">Detailed Description</label>
                        <textarea name="desc" id="desc" rows="4"
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4 placeholder:text-slate-300 @error('desc') border-red-600 shadow-[4px_4px_0px_0px_rgba(220,38,38,1)] @enderror"
                            placeholder="INPUT CONTACT DATA...">{{ old('desc', $contact->desc) }}</textarea>
                        @error('desc')
                            <p class="mt-4 text-[9px] font-black text-red-600 uppercase tracking-widest italic animate-pulse">! {{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="title" class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2 italic">Link Maps</label>
                        <input type="text" name="maps_link" id="maps_link" value="{{ old('title', $contact->maps_link) }}"
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4 placeholder:text-slate-300 @error('title') border-red-600 shadow-[4px_4px_0px_0px_rgba(220,38,38,1)] @enderror"
                            placeholder="ENTER LINK MAPS...">
                        @error('maps_link')
                            <p class="mt-4 text-[9px] font-black text-red-600 uppercase tracking-widest italic animate-pulse">! {{ $message }}</p>
                        @enderror
                    </div>

                    <div class="pt-4 flex items-center justify-between">
                        <a href="{{ route('admin.slide.index') }}" class="text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-slate-950 transition-colors">
                            &larr; Abort Mission
                        </a>
                        
                        <button type="submit" 
                            class="bg-blue-600 text-white text-[11px] font-black uppercase tracking-[0.2em] px-10 py-4 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-blue-700 active:translate-x-1 active:translate-y-1 active:shadow-none transition-all">
                            Execute Deploy
                        </button>
                    </div>

                </form>
            </div>
            
            @if ($errors->any())
                <div class="mt-8 p-4 bg-red-600 border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
                    <p class="text-[10px] font-black text-white uppercase tracking-widest">
                        System Alert: Deployment Failed. Please correct the highlighted parameters.
                    </p>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>