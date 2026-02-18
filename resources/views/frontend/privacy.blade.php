@extends('frontend.layout')
@section('title', 'Privacy Policy')
@section('content')
    <div class="prose prose-invert max-w-none text-slate-400">
    <h1 class="text-white text-3xl font-bold mb-6">Privacy Policy</h1>
    <p class="mb-4 text-sm italic">Terakhir diperbarui: {{ date('d F Y') }}</p>

    <h2 class="text-white text-xl font-semibold mt-8 mb-4">1. Informasi yang Saya Kumpulkan</h2>
    <p>Ketika Anda menghubungi saya melalui formulir kontak, saya mengumpulkan nama, alamat email, dan isi pesan Anda. Informasi ini dikirimkan langsung ke sistem database saya untuk kebutuhan komunikasi.</p>

    <h2 class="text-white text-xl font-semibold mt-8 mb-4">2. Penggunaan Informasi</h2>
    <p>Data Anda hanya digunakan untuk:</p>
    <ul class="list-disc ml-6 space-y-2">
        <li>Membalas pertanyaan atau tawaran kerja sama Anda.</li>
        <li>Meningkatkan fungsionalitas website portfolio saya.</li>
    </ul>

    <h2 class="text-white text-xl font-semibold mt-8 mb-4">3. Keamanan Data</h2>
    <p>Sebagai pengembang backend, saya memprioritaskan keamanan data Anda. Informasi Anda disimpan dalam database yang aman dan tidak akan pernah dijual atau dibagikan kepada pihak ketiga tanpa izin Anda.</p>

    <h2 class="text-white text-xl font-semibold mt-8 mb-4">4. Kontak</h2>
    <p>Jika ada pertanyaan mengenai kebijakan privasi ini, silakan hubungi saya melalui halaman kontak.</p>
</div>
@endsection