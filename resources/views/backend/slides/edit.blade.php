<x-app-layout>
    <x-slot name="title">Edit Slide</x-slot>

    <x-slot name="header">
        <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
            {{ __('Update Slide Configuration') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8">
                
                <form action="{{ route('admin.slide.update', $slide->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT') <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2 italic">Slide Title</label>
                        <input type="text" name="title" value="{{ old('title', $slide->title) }}" required
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2 italic">Detailed Description</label>
                        <textarea name="desc" rows="4" required
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4">{{ old('desc', $slide->desc) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2 italic">Current Visual Asset</label>
                        <div class="w-48 h-28 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] mb-4 overflow-hidden">
                            <img src="{{ asset('storage/' . $slide->image) }}" class="w-full h-full object-cover">
                        </div>
                        
                        <label class="block text-[9px] font-bold text-slate-400 uppercase mb-2">Upload new to replace (Optional)</label>
                        <input type="file" name="image" 
                            class="text-[10px] font-black text-slate-500 uppercase file:mr-4 file:py-2 file:px-4 file:border-2 file:border-slate-950 file:bg-white file:text-[10px] file:font-black hover:file:bg-slate-100">
                    </div>

                    <div class="pt-4 flex items-center justify-between border-t-2 border-slate-50 mt-8">
                        <a href="{{ route('admin.slide.index') }}" class="text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-slate-950 transition-colors">
                            &larr; Cancel Changes
                        </a>
                        
                        <button type="submit" 
                            class="bg-yellow-400 text-slate-950 text-[11px] font-black uppercase tracking-[0.2em] px-10 py-4 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-yellow-500 active:translate-x-1 active:translate-y-1 active:shadow-none transition-all">
                            Commit Changes
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</x-app-layout>