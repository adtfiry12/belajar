<x-app-layout>
    <x-slot name="header">
        <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
            {{ __('Account Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
            
            <div class="p-6 sm:p-10 bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
                <div class="max-w-xl">
                    <h3 class="text-sm font-black uppercase tracking-widest text-blue-600 mb-6 italic underline decoration-2">
                        Profile Information
                    </h3>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-6 sm:p-10 bg-white border-2 border-slate-950 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)]">
                <div class="max-w-xl">
                    <h3 class="text-sm font-black uppercase tracking-widest text-blue-600 mb-6 italic underline decoration-2">
                        Security Update
                    </h3>
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-6 sm:p-10 bg-white border-2 border-red-600 shadow-[8px_8px_0px_0px_rgba(220,38,38,1)]">
                <div class="max-w-xl">
                    <h3 class="text-sm font-black uppercase tracking-widest text-red-600 mb-6 italic underline decoration-2">
                        Danger Zone
                    </h3>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>