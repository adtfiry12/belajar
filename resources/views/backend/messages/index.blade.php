<x-app-layout>
    <x-slot name="title">Inbox</x-slot>

    <x-slot name="header">
        <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
            {{ __('Incoming Messages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-950 text-white border-b-2 border-slate-950 text-[10px] font-black uppercase tracking-[0.2em]">
                            <th class="px-6 py-4">Sender Info</th>
                            <th class="px-6 py-4">Subject & Content</th>
                            <th class="px-6 py-4">Metadata</th>
                            <th class="px-6 py-4 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y-2 divide-slate-950">
                        @forelse ($messages as $msg)
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="px-6 py-6 align-top">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-black text-slate-900 uppercase tracking-tight">{{ $msg->name }}</span>
                                        <span class="text-[10px] font-bold text-blue-600 uppercase italic">{{ $msg->email }}</span>
                                    </div>
                                </td>

                                <td class="px-6 py-6 align-top max-w-md">
                                    <div class="flex flex-col">
                                        <span class="text-xs font-black text-slate-900 uppercase tracking-widest mb-2 underline decoration-2 decoration-blue-500">
                                            RE: {{ $msg->subject }}
                                        </span>
                                        <p class="text-[11px] font-bold text-slate-500 uppercase leading-relaxed italic line-clamp-3">
                                            "{{ $msg->message }}"
                                        </p>
                                    </div>
                                </td>

                                <td class="px-6 py-6 align-top">
                                    <div class="space-y-2">
                                        <span class="bg-slate-100 border border-slate-900 text-[9px] font-black px-2 py-0.5 uppercase block w-fit">
                                            IP: {{ $msg->ip_address ?? 'Unknown' }}
                                        </span>
                                        <span class="text-[9px] font-bold text-slate-400 uppercase block tracking-tighter">
                                            {{ $msg->created_at->format('d M Y | H:i') }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-6 align-top text-right">
                                        <form action="{{ route('messages.destroy', $msg->id) }}" method="POST" onsubmit="return confirm('Execute permanent deletion?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-3 border-2 border-slate-950 bg-red-600 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-red-700 transition-all active:shadow-none active:translate-x-1 active:translate-y-1">
                                                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="px-6 py-12 text-center bg-slate-50">
                                        <p class="text-[10px] font-black uppercase tracking-widest text-slate-400 italic">No incoming transmissions detected.</p>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </x-app-layout>