<x-guest-layout>
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <label for="email" class="block text-[10px] font-black uppercase tracking-widest text-slate-900 mb-2">
                {{ __('Email Address') }}
            </label>
            <x-text-input id="email" 
                class="block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 transition-all text-sm py-3 px-4" 
                type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-[10px] font-bold uppercase italic text-red-600" />
        </div>

        <div>
            <div class="flex items-center justify-between mb-2">
                <label for="password" class="block text-[10px] font-black uppercase tracking-widest text-slate-900">
                    {{ __('Password') }}
                </label>
                @if (Route::has('password.request'))
                    <a class="text-[9px] font-black uppercase tracking-tighter text-blue-600 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot?') }}
                    </a>
                @endif
            </div>

            <x-text-input id="password" 
                class="block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 transition-all text-sm py-3 px-4"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2 text-[10px] font-bold uppercase italic text-red-600" />
        </div>

        <div class="flex items-center justify-between pt-4">
            <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                <input id="remember_me" type="checkbox" 
                    class="w-4 h-4 rounded-none border-2 border-slate-950 text-blue-600 shadow-sm focus:ring-0 focus:ring-offset-0" 
                    name="remember">
                <span class="ms-2 text-[10px] font-black uppercase tracking-widest text-slate-500 group-hover:text-slate-900 transition-colors">
                    {{ __('Stay Signed In') }}
                </span>
            </label>

            <button type="submit" 
                class="bg-slate-950 text-white text-[11px] font-black uppercase tracking-widest px-8 py-3 border-2 border-slate-950 hover:bg-blue-600 hover:border-blue-600 transition-all shadow-[4px_4px_0px_0px_rgba(37,99,235,1)] active:translate-x-1 active:translate-y-1 active:shadow-none">
                {{ __('Login') }}
            </button>
        </div>
    </form>
</x-guest-layout>