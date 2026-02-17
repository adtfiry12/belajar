<x-app-layout>
    <x-slot name="title">Initialize About</x-slot>
    <x-slot name="header">
        <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">
            {{ __('Initialize Personal Registry') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    
                    <div class="lg:col-span-8 space-y-8">
                        
                        <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-6">
                            <div class="border-b-2 border-slate-900 pb-2 mb-6">
                                <h3 class="font-black text-xs uppercase tracking-widest text-slate-900">Primary Identity</h3>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label class="text-[10px] font-black uppercase text-slate-900 mb-1 block tracking-widest">Full Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" required
                                        class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold focus:ring-0 focus:bg-white shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                                    @error('name') <p class="mt-2 text-[9px] font-black text-red-600 uppercase italic">! {{ $message }}</p> @enderror
                                </div>

                                <div>
                                    <label class="text-[10px] font-black uppercase text-slate-900 mb-1 block tracking-widest">Phone Number</label>
                                    <input type="text" name="no_telp" value="{{ old('no_telp') }}" required
                                        class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold focus:ring-0 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                                </div>

                                <div>
                                    <label class="text-[10px] font-black uppercase text-slate-900 mb-1 block tracking-widest">Email Address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required
                                        class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold focus:ring-0 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                                </div>

                                <div>
                                    <label class="text-[10px] font-black uppercase text-slate-900 mb-1 block tracking-widest">Education</label>
                                    <input type="text" name="study" value="{{ old('study') }}" 
                                        class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold focus:ring-0 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                                </div>

                                <div>
                                    <label class="text-[10px] font-black uppercase text-slate-900 mb-1 block tracking-widest">Role</label>
                                    <input type="text" name="role" value="{{ old('role') }}" 
                                        class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold focus:ring-0 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-6">
                            <div class="border-b-2 border-slate-900 pb-2 mb-6">
                                <h3 class="font-black text-xs uppercase tracking-widest text-slate-900">Biography Registry</h3>
                            </div>

                            <div class="space-y-6">
                                <div>
                                    <label class="text-[10px] font-black uppercase text-slate-900 mb-1 block tracking-widest">Hero Title</label>
                                    <input type="text" name="title" value="{{ old('title') }}"
                                        class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold focus:ring-0 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">
                                </div>

                                <div>
                                    <label class="text-[10px] font-black uppercase text-slate-900 mb-1 block tracking-widest">Full Description</label>
                                    <textarea name="desc" rows="6" 
                                        class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold focus:ring-0 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">{{ old('desc') }}</textarea>
                                </div>

                                <div>
                                    <label class="text-[10px] font-black uppercase text-slate-900 mb-1 block tracking-widest">Physical Address</label>
                                    <textarea name="alamat" rows="2" 
                                        class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold focus:ring-0 shadow-[4px_4px_0px_0px_rgba(15,23,42,1)]">{{ old('alamat') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 space-y-8">
                        
                        <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-6">
                            <label class="text-[10px] font-black uppercase text-slate-900 mb-4 block tracking-widest">Visual Asset (Photo)</label>
                            <div class="border-2 border-dashed border-slate-300 p-4 flex flex-col items-center justify-center bg-slate-50">
                                <input type="file" name="photo" class="text-[10px] font-bold text-slate-500 uppercase file:mr-4 file:py-2 file:px-4 file:border-2 file:border-slate-900 file:bg-white file:text-[9px] file:font-black">
                            </div>
                        </div>

                        <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-6">
                            <label class="text-[10px] font-black uppercase text-slate-900 mb-4 block tracking-widest italic">Social Connectors</label>
                            <div class="space-y-4">
                                <input type="text" name="linkedin" placeholder="LINKEDIN (Opsional)" class="w-full border-2 border-slate-900 bg-slate-50 p-2 text-xs font-bold focus:bg-white">
                                <input type="text" name="github" placeholder="GITHUB URL (Opsional)" class="w-full border-2 border-slate-900 bg-slate-50 p-2 text-xs font-bold focus:bg-white">
                                <input type="text" name="instagram" placeholder="INSTAGRAM URL (Opsional)" class="w-full border-2 border-slate-900 bg-slate-50 p-2 text-xs font-bold focus:bg-white">
                                <input type="text" name="facebook" placeholder="FACEBOOK URL (Opsional)" class="w-full border-2 border-slate-900 bg-slate-50 p-2 text-xs font-bold focus:bg-white">
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <button type="submit" 
                                class="w-full bg-blue-600 border-2 border-slate-900 p-4 text-white font-black uppercase tracking-[0.2em] text-xs shadow-[4px_4px_0px_0px_rgba(15,23,42,1)] hover:translate-x-0.5 hover:translate-y-0.5 hover:shadow-none transition-all">
                                Execute Deployment
                            </button>
                            <a href="{{ route('admin.dashboard') }}" 
                                class="w-full bg-white border-2 border-slate-900 p-4 text-slate-900 text-center font-black uppercase tracking-[0.2em] text-xs shadow-[4px_4px_0px_0px_rgba(15,23,42,1)] hover:bg-slate-50">
                                Abort Mission
                            </a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>