<div class="flex h-screen bg-white" x-data="{ sidebarOpen: false }">
    <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
           class="fixed inset-y-0 left-0 z-50 w-64 bg-slate-950 text-slate-400 transition-transform duration-300 transform lg:translate-x-0 lg:static lg:inset-0 border-r border-slate-800">
        
        <div class="flex items-center justify-center h-16 border-b border-slate-800 bg-slate-950 px-4">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3">
                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span class="text-lg font-black tracking-tighter text-white uppercase">ADT<span class="text-blue-500">CODE</span></span>
            </a>
        </div>

        <nav class="mt-4 px-0 space-y-0.5">
            <x-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('dashboard')">
                <svg class="w-4 h-4 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    {{ __('Dashboard') }}
            </x-nav-link>

            <x-nav-link :href="route('admin.slide.index')" :active="request()->routeIs('admin.slide.index')">
                <svg class="w-4 h-4 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    {{ __('Slide') }}
            </x-nav-link>

            <x-nav-link :href="route('admin.project.index')" :active="request()->routeIs('admin.project.index')">
                <svg class="w-4 h-4 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/></svg>
                    {{ __('Project') }}
            </x-nav-link>

            <x-nav-link :href="route('admin.about.index')" :active="request()->routeIs('admin.about.index')">
                <svg class="w-4 h-4 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                    {{ __('About') }}
            </x-nav-link>

            <x-nav-link :href="route('admin.contact.index')" :active="request()->routeIs('admin.contact.index')">
                <svg class="w-4 h-4 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    {{ __('Contact') }}
            </x-nav-link>

            <x-nav-link :href="route('admin.message.index')" :active="request()->routeIs('admin.message.index')">
                <svg class="w-4 h-4 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    {{ __('Message') }}
            </x-nav-link>

            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <svg class="w-4 h-4 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                {{ __('View Site') }}
            </x-nav-link>

        </nav>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="h-16 bg-slate-100 border-b border-slate-200 flex items-center justify-between px-6">
            <button @click="sidebarOpen = !sidebarOpen" class="text-slate-500 lg:hidden focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
            </button>

            <div class="flex items-center ms-auto space-x-4">
                <div class="flex flex-col text-right">
                    <span class="text-[11px] font-black uppercase text-slate-900 tracking-tight">{{ Auth::user()->name }}</span>
                    <span class="text-[9px] font-bold text-blue-600 uppercase tracking-widest">Administrator</span>
                </div>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center border-2 border-slate-900 p-0.5 hover:bg-slate-200 transition">
                            <div class="bg-slate-900 text-white p-1">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="font-bold uppercase text-[10px] tracking-widest">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="font-bold uppercase text-[10px] tracking-widest text-red-600">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </header>

        @isset($header)
            <div class="bg-white border-b border-slate-100 px-8 py-4">
                {{ $header }}
            </div>
        @endisset

        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-white p-8">
            {{ $slot }}
        </main>
    </div>
</div>