<x-app-layout>
    <x-slot name="title">Project</x-slot>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
                {{ __('Project Portfolio') }}
            </h2>
            <a href="{{ route('admin.project.create') }}" class="bg-blue-600 text-white text-[10px] font-black uppercase tracking-widest px-6 py-2 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-blue-700 transition-all active:translate-x-0.5 active:translate-y-0.5 active:shadow-none">
                + Register New Project
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-950 text-white border-b-2 border-slate-950 text-[10px] font-black uppercase tracking-[0.2em]">
                            <th class="px-6 py-4 w-16">ID</th>
                            <th class="px-6 py-4 w-32">Thumbnail</th>
                            <th class="px-6 py-4">Project Info</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y-2 divide-slate-950">
                        @forelse ($projects as $project)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-4 font-black text-slate-400 text-xs">#{{ $project->id }}</td>
                                <td class="px-6 py-4">
                                    <div class="w-24 h-16 bg-slate-100 border-2 border-slate-950 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
                                        <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="w-full h-full object-cover">
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-black text-slate-900 uppercase tracking-tight">{{ $project->title }}</span>
                                        <p class="text-[10px] font-bold text-slate-500 mt-1 uppercase leading-tight line-clamp-2 italic">
                                            {{ $project->desc }}
                                        </p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <div class="flex justify-end space-x-2">
                                        <a href="{{ route('admin.project.edit', $project->id) }}" class="p-2 border-2 border-slate-950 bg-yellow-400 hover:bg-yellow-500 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:shadow-none transition-all">
                                            <svg class="w-4 h-4 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                        </a>
                                        <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" onsubmit="return confirm('WARNING: Data Project ini akan dihapus permanen dari registry ADTCODE. Lanjutkan?')">
                                            @csrf
                                            @method('DELETE')
    
                                            <button type="submit" class="p-2 border-2 border-slate-950 bg-red-500 hover:bg-red-600 shadow-[2px_2px_0px_0px_rgba(0,0,0,1)] active:shadow-none active:translate-x-0.5 active:translate-y-0.5 transition-all">
                                                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-12 text-center">
                                    <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 italic">
                                        No project data found in repository.
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>