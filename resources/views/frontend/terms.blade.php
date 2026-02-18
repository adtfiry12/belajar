@extends('frontend.layout')
@section('title', 'Terms of Service')
@section('content')
    <div class="prose prose-invert max-w-none text-slate-400">
    <h1 class="text-white text-3xl font-bold mb-6">Terms of Service</h1>
    <p class="mb-4 text-sm italic">Terakhir diperbarui: {{ date('d F Y') }}</p>

    <h2 class="text-white text-xl font-semibold mt-8 mb-4">1. Ketentuan Penggunaan</h2>
    <p>Dengan mengakses website <strong>ADT CODE.</strong>, Anda setuju untuk tidak melakukan tindakan yang merusak integritas sistem, seperti percobaan hacking, spamming, atau pengiriman data berbahaya melalui formulir yang tersedia.</p>

    <h2 class="text-white text-xl font-semibold mt-8 mb-4">2. Hak Kekayaan Intelektual</h2>
    <p>Seluruh konten di website ini, termasuk namun tidak terbatas pada desain UI, kode sumber (source code), dan dokumentasi project adalah milik <strong>Aditya Mukti F.</strong> kecuali disebutkan lain. Penggunaan ulang tanpa izin tertulis dilarang.</p>

    <h2 class="text-white text-xl font-semibold mt-8 mb-4">3. Batasan Tanggung Jawab</h2>
    <p>Website ini disediakan "sebagaimana adanya" untuk tujuan portfolio. Saya tidak bertanggung jawab atas kerugian yang mungkin timbul akibat penggunaan informasi atau link pihak ketiga yang terdapat dalam website ini.</p>

    <h2 class="text-white text-xl font-semibold mt-8 mb-4">4. Perubahan Ketentuan</h2>
    <p>Saya berhak mengubah ketentuan ini sewaktu-waktu tanpa pemberitahuan sebelumnya. Silakan periksa halaman ini secara berkala.</p>
</div>
@endsection