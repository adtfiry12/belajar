@props(['active'])

@php
$classes = ($active ?? false)
            ? 'flex items-center px-4 py-3 text-[10px] font-black uppercase tracking-widest border-l-4 border-blue-500 bg-slate-900 text-white transition-all duration-200'
            : 'flex items-center px-4 py-3 text-[10px] font-bold uppercase tracking-widest border-l-4 border-transparent text-slate-500 hover:bg-slate-900 hover:text-white transition-all duration-200';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>