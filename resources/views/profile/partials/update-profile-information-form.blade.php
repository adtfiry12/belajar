<section>
    <header class="mb-8">
        <h2 class="text-xs font-black uppercase tracking-[0.2em] text-slate-400">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-[10px] font-bold text-slate-500 uppercase tracking-tight">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-8">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" class="text-[10px] font-black uppercase tracking-widest text-slate-900 mb-2" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" 
                class="mt-1 block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 transition-all text-sm py-3 px-4 font-bold" 
                :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2 text-[10px] font-bold uppercase italic text-red-600" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" class="text-[10px] font-black uppercase tracking-widest text-slate-900 mb-2" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" 
                class="mt-1 block w-full border-2 border-slate-950 rounded-none shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] focus:ring-0 focus:border-blue-600 transition-all text-sm py-3 px-4 font-bold" 
                :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2 text-[10px] font-bold uppercase italic text-red-600" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-4 p-4 border-2 border-dashed border-slate-200">
                    <p class="text-[10px] font-bold uppercase text-slate-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-blue-600 hover:text-blue-800 focus:outline-none">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 text-[10px] font-black text-green-600 uppercase tracking-widest italic">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-6 pt-4">
            <button type="submit" 
                class="bg-slate-950 text-white text-[11px] font-black uppercase tracking-[0.2em] px-10 py-3 border-2 border-slate-950 hover:bg-blue-600 hover:border-blue-600 transition-all shadow-[4px_4px_0px_0px_rgba(37,99,235,1)] active:translate-x-1 active:translate-y-1 active:shadow-none">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-[10px] font-black uppercase tracking-widest text-green-600 animate-pulse"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>