<x-app-layout>
    <x-slot name="title">Re-calibrate</x-slot>
    <x-slot name="header">
        <h2 class="font-black text-xl text-slate-900 uppercase tracking-tight">Recalibrate Identity</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <form action="{{ route('admin.about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                    <div class="lg:col-span-8 space-y-8">
                        <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-6">
                            <div class="border-b-2 border-slate-900 pb-2 mb-6">
                                <h3 class="font-black text-xs uppercase tracking-widest">Primary Info</h3>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label class="text-[10px] font-black uppercase mb-1 block">Full Name</label>
                                    <input type="text" name="name" value="{{ old('name', $about->name) }}" class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                                </div>
                                <div>
                                    <label class="text-[10px] font-black uppercase mb-1 block">Phone</label>
                                    <input type="text" name="no_telp" value="{{ old('no_telp', $about->no_telp) }}" class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                                </div>
                                <div>
                                    <label class="text-[10px] font-black uppercase mb-1 block">Email</label>
                                    <input type="email" name="email" value="{{ old('email', $about->email) }}" class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                                </div>
                                <div>
                                    <label class="text-[10px] font-black uppercase mb-1 block">Education</label>
                                    <input type="text" name="study" value="{{ old('study', $about->study) }}" class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                                </div>
                                <div>
                                    <label class="text-[10px] font-black uppercase mb-1 block">Role</label>
                                    <input type="text" name="role" value="{{ old('role', $about->role) }}" class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-6">
                            <div class="space-y-6">
                                <div>
                                    <label class="text-[10px] font-black uppercase mb-1 block">Hero Title</label>
                                    <input type="text" name="title" value="{{ old('title', $about->title) }}" class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">
                                </div>
                                <div>
                                    <label class="text-[10px] font-black uppercase mb-1 block">Bio Description</label>
                                    <textarea name="desc" rows="5" class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">{{ old('desc', $about->desc) }}</textarea>
                                </div>
                                <div>
                                    <label class="text-[10px] font-black uppercase mb-1 block">Address</label>
                                    <textarea name="alamat" rows="2" class="w-full border-2 border-slate-900 bg-slate-50 p-3 text-sm font-bold shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">{{ old('alamat', $about->alamat) }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 space-y-8">
                        <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-6">
                            <label class="text-[10px] font-black uppercase mb-4 block">Photo Asset</label>
                            @if($about->photo)
                                <img src="{{ asset('storage/'.$about->photo) }}" class="w-full mb-4 border-2 border-slate-900 grayscale">
                            @endif
                            <input type="file" name="photo" class="text-[10px] font-bold">
                        </div>

                        <div class="bg-white border-2 border-slate-900 shadow-[8px_8px_0px_0px_rgba(0,0,0,1)] p-6">
                            <label class="text-[10px] font-black uppercase mb-4 block italic">Social Links</label>
                            <div class="space-y-4">
                                <input type="text" name="linkedin" value="{{ $about->linkedin }}" placeholder="LinkedIn URL" class="w-full border-2 border-slate-900 bg-slate-50 p-2 text-xs font-bold">
                                <input type="text" name="github" value="{{ $about->github }}" placeholder="GitHub URL" class="w-full border-2 border-slate-900 bg-slate-50 p-2 text-xs font-bold">
                                <input type="text" name="instagram" value="{{ $about->instagram }}" placeholder="Instagram URL" class="w-full border-2 border-slate-900 bg-slate-50 p-2 text-xs font-bold">
                                <input type="text" name="facebook" value="{{ $about->facebook }}" placeholder="Facebook URL" class="w-full border-2 border-slate-900 bg-slate-50 p-2 text-xs font-bold">
                            </div>
                        </div>

                        <div class="flex flex-col gap-4">
                            <button type="submit" class="w-full bg-blue-600 border-2 border-slate-900 p-4 text-white font-black uppercase text-xs shadow-[4px_4px_0px_0px_rgba(0,0,0,1)] hover:bg-blue-700">Update Registry</button>
                            <a href="{{ route('admin.about.index') }}" class="w-full bg-white border-2 border-slate-900 p-4 text-center font-black uppercase text-xs shadow-[4px_4px_0px_0px_rgba(0,0,0,1)]">Abort</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>