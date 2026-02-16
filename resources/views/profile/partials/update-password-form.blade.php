<section>
    <header class="mb-8">
        <h2 class="text-xs font-black uppercase tracking-[0.2em] text-slate-400">
            {{ __('Update Password') }}
        </h2>
        <p class="mt-1 text-[10px] font-bold text-slate-500 uppercase tracking-tight">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-8">
        @csrf
        @method('put')

        <div>
            <x-input-label for="update_password_current_password" class="text-[10px] font-black uppercase tracking-widest text-slate-900 mb-2" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" 
                class="mt-1 block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 transition-all text-sm py-3 px-4 font-bold" 
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2 text-[10px] font-bold uppercase italic text-red-600" />
        </div>

        <div>
            <x-input-label for="update_password_password" class="text-[10px] font-black uppercase tracking-widest text-slate-900 mb-2" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" 
                class="mt-1 block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 transition-all text-sm py-3 px-4 font-bold" 
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2 text-[10px] font-bold uppercase italic text-red-600" />
        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" class="text-[10px] font-black uppercase tracking-widest text-slate-900 mb-2" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" 
                class="mt-1 block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 transition-all text-sm py-3 px-4 font-bold" 
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2 text-[10px] font-bold uppercase italic text-red-600" />
        </div>

        <div class="flex items-center gap-6 pt-4">
            <button type="submit" 
                class="bg-slate-950 text-white text-[11px] font-black uppercase tracking-[0.2em] px-10 py-3 border-2 border-slate-950 hover:bg-blue-600 hover:border-blue-600 transition-all shadow-[4px_4px_0px_0px_rgba(37,99,235,1)] active:translate-x-1 active:translate-y-1 active:shadow-none">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-[10px] font-black uppercase tracking-widest text-green-600 animate-pulse">
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>