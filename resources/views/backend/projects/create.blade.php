<x-app-layout>
    <x-slot name="title">New Project</x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8">
                <h2 class="text-xl font-black uppercase tracking-tighter mb-8 italic">System Initialization: <span class="text-blue-600">New Project</span></h2>
                
                <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2">Project Identity</label>
                        <input type="text" name="title" value="{{ old('title') }}"
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4 @error('title') border-red-600 shadow-[4px_4px_0px_0px_rgba(220,38,38,1)] @enderror"
                            placeholder="PROJECT NAME...">
                        @error('title') <p class="mt-2 text-[9px] font-black text-red-600 uppercase italic">! {{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2">Technical Specs</label>
                        <textarea name="desc" rows="4"
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4 @error('desc') border-red-600 shadow-[4px_4px_0px_0px_rgba(220,38,38,1)] @enderror"
                            placeholder="DESCRIBE THE STACK OR PROJECT GOAL...">{{ old('desc') }}</textarea>
                        @error('desc') <p class="mt-2 text-[9px] font-black text-red-600 uppercase italic">! {{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2">Visual Documentation</label>
                        <input type="file" name="image" 
                            class="w-full border-2 border-dashed border-slate-300 p-8 text-[10px] font-black text-slate-400 uppercase tracking-widest hover:border-blue-600 transition-colors file:hidden">
                        @error('image') <p class="mt-2 text-[9px] font-black text-red-600 uppercase italic">! {{ $message }}</p> @enderror
                    </div>

                    <div class="pt-4 flex justify-between items-center border-t-2 border-slate-50">
                        <a href="{{ route('admin.project.index') }}" class="text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-slate-950">&larr; Abort</a>
                        <button type="submit" class="bg-blue-600 text-white text-[11px] font-black uppercase tracking-[0.2em] px-10 py-4 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">Execute Deploy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>