<x-app-layout>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="header">
        <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-white border-2 border-slate-900 p-6 flex flex-col shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                    <span class="text-[10px] font-black uppercase text-blue-600 tracking-widest mb-1">Total Projects</span>
                    <span class="text-4xl font-black text-slate-900 leading-none">12</span>
                    <p class="mt-4 text-[10px] font-bold text-slate-400 uppercase tracking-tighter">Updated: 15 Feb 2026</p>
                </div>

                <div class="bg-white border-2 border-slate-900 p-6 flex flex-col shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                    <span class="text-[10px] font-black uppercase text-blue-600 tracking-widest mb-1">Tech Stack</span>
                    <span class="text-4xl font-black text-slate-900 leading-none tracking-tighter">LVL-12</span>
                    <div class="mt-4 flex gap-2">
                        <span class="bg-slate-900 text-white text-[9px] px-2 py-1 font-black uppercase">Tailwind v4</span>
                        <span class="bg-slate-900 text-white text-[9px] px-2 py-1 font-black uppercase">Vite</span>
                    </div>
                </div>

                <div class="bg-blue-600 border-2 border-slate-900 p-6 flex flex-col shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                    <span class="text-[10px] font-black uppercase text-white tracking-widest mb-1">Upcoming UKT</span>
                    <span class="text-4xl font-black text-white leading-none tracking-tighter italic">JULY 2026</span>
                    <p class="mt-4 text-[10px] font-bold text-blue-200 uppercase tracking-widest italic">Prepare your physical fitness, Dit!</p>
                </div>
            </div>

            <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
                <div class="border-b-2 border-slate-900 p-4 bg-slate-50 flex items-center justify-between">
                    <h3 class="font-black text-xs uppercase tracking-widest text-slate-900">Recent Project Activity</h3>
                    <a href="{{ route('home') }}" class="text-[10px] font-black uppercase text-blue-600 hover:underline">View All &rarr;</a>
                </div>
                
                <div class="p-6">
                    <div class="flex items-center justify-center h-32 border-2 border-dashed border-slate-200">
                        <p class="text-[10px] font-bold text-slate-400 uppercase italic">Belum ada data input. Mulai buat CRUD sekarang!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>