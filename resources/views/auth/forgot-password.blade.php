<x-guest-layout>
    <div class="mb-6 text-[10px] font-bold text-slate-500 uppercase tracking-tight leading-relaxed">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
        @csrf

        <div>
            <x-input-label for="email" class="text-[10px] font-black uppercase tracking-widest text-slate-900 mb-2" :value="__('Email')" />
            <x-text-input id="email" 
                class="block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 transition-all text-sm py-3 px-4 font-bold" 
                type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-[10px] font-bold uppercase italic text-red-600" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" 
                class="bg-slate-950 text-white text-[11px] font-black uppercase tracking-widest px-8 py-3 border-2 border-slate-950 hover:bg-blue-600 hover:border-blue-600 transition-all shadow-[4px_4px_0px_0px_rgba(37,99,235,1)] active:translate-x-1 active:translate-y-1 active:shadow-none">
                {{ __('Email Password Reset Link') }}
            </button>
        </div>
    </form>
</x-guest-layout>