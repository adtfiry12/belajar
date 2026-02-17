<x-app-layout>
    <x-slot name="title">Edit Project | ADTCODE</x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-8">
                <h2 class="text-xl font-black uppercase tracking-tighter mb-8 italic text-yellow-500 underline decoration-slate-950 decoration-4 underline-offset-8">Update Registry: Project</h2>
                
                <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2">Project Identity</label>
                        <input type="text" name="title" value="{{ old('title', $project->title) }}"
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4">
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2">Technical Specs</label>
                        <textarea name="desc" rows="4"
                            class="w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 font-bold text-sm py-3 px-4">{{ old('desc', $project->desc) }}</textarea>
                    </div>

                    <div>
                        <label class="block text-[10px] font-black uppercase tracking-[0.2em] text-slate-900 mb-2 italic">Current Registry Image</label>
                        <div class="w-full h-48 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] mb-4 overflow-hidden bg-slate-100">
                            <img src="{{ asset('storage/' . $project->image) }}" class="w-full h-full object-cover">
                        </div>
                        <input type="file" name="image" class="text-[10px] font-black text-slate-400">
                    </div>

                    <div class="pt-4 flex justify-between items-center border-t-2 border-slate-50">
                        <a href="{{ route('admin.project.index') }}" class="text-[10px] font-black uppercase tracking-widest text-slate-400 hover:text-slate-950">&larr; Cancel</a>
                        <button type="submit" class="bg-yellow-400 text-slate-950 text-[11px] font-black uppercase tracking-[0.2em] px-10 py-4 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:translate-x-1 hover:translate-y-1 hover:shadow-none transition-all">Synchronize Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>