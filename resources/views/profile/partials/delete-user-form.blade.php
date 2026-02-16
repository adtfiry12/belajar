<section class="space-y-6">
    <header class="mb-8">
        <h2 class="text-xs font-black uppercase tracking-[0.2em] text-red-600">
            {{ __('Danger Zone') }}
        </h2>

        <p class="mt-1 text-[10px] font-bold text-slate-500 uppercase tracking-tight">
            {{ __('Once your account is deleted, all of its resources and data will be permanently purged from the ADTCODE environment.') }}
        </p>
    </header>

    <button 
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="bg-red-600 text-white text-[11px] font-black uppercase tracking-widest px-8 py-4 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-red-700 transition-all active:translate-x-1 active:translate-y-1 active:shadow-none"
    >
        {{ __('Delete') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-8 bg-white border-4 border-slate-950 rounded-none shadow-[12px_12px_0px_0px_rgba(0,0,0,1)]">
            @csrf
            @method('delete')

            <h2 class="text-lg font-black uppercase tracking-tighter text-slate-900">
                {{ __('Confirm Permanent Purge?') }}
            </h2>

            <p class="mt-2 text-xs font-bold text-slate-500 uppercase tracking-tight">
                {{ __('This action is irreversible. Please enter your authorization key to proceed with the deletion.') }}
            </p>

            <div class="mt-8">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />

                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="mt-1 block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-red-600 text-sm py-3 px-4 font-bold"
                    placeholder="{{ __('Verification Password') }}"
                />

                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 text-[10px] font-bold uppercase italic text-red-600" />
            </div>

            <div class="mt-10 flex justify-end space-x-4">
                <button type="button" x-on:click="$dispatch('close')" 
                    class="text-[10px] font-black uppercase tracking-widest px-6 py-3 border-2 border-slate-950 hover:bg-slate-100 transition-all">
                    {{ __('Abort') }}
                </button>

                <button type="submit" 
                    class="bg-red-600 text-white text-[11px] font-black uppercase tracking-widest px-8 py-3 border-2 border-slate-950 shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-red-700 active:translate-x-1 active:translate-y-1 active:shadow-none transition-all">
                    {{ __('Execute Delete') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>