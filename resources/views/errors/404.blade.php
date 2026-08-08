@extends('layouts.site')

@section('title', 'Halaman Tidak Ditemukan — Indo Nyaman')

@section('content')
<section class="flex min-h-[70vh] items-center justify-center px-6 py-20">
    <div class="mx-auto max-w-lg text-center">
        <p class="font-display text-8xl font-semibold text-brand/30">404</p>
        <h1 class="mt-4 font-display text-3xl font-semibold text-ink md:text-4xl"
            x-text="lang === 'id' ? 'Halaman yang Anda cari tidak ketemu' : 'We couldn\'t find the page you\'re looking for'">
        </h1>
        <p class="mt-4 text-ink/70"
           x-text="lang === 'id' ? 'Mungkin link-nya salah ketik, atau halamannya sudah dipindah. Tenang, tim kita masih standby.' : 'Maybe the link was mistyped, or the page has been moved. Don\'t worry, our team is still standing by.'">
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
            <a href="{{ url('/') }}"
               class="rounded-full bg-brand px-6 py-3 text-sm font-semibold text-cream transition hover:bg-brand-dark"
               x-text="lang === 'id' ? 'Kembali ke Beranda' : 'Back to Home'">
            </a>
            <a href="https://wa.me/{{ config('services.whatsapp.number') }}" target="_blank"
               class="rounded-full border border-brand/30 px-6 py-3 text-sm font-semibold text-brand-dark transition hover:bg-brand/10"
               x-text="lang === 'id' ? 'Chat WhatsApp' : 'Chat on WhatsApp'">
            </a>
        </div>
    </div>
</section>
@endsection