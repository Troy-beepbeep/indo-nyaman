<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
                <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                    Dashboard Utama
                </h2>
                <p class="text-sm text-slate-500 mt-0.5">Ringkasan status dan kendali cepat konten Indo Nyaman.</p>
            </div>
            
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-emerald-50 border border-emerald-200/60 rounded-full text-xs font-semibold text-emerald-800 w-fit">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Sistem Website Online</span>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <div class="relative bg-gradient-to-r from-emerald-900 via-emerald-800 to-teal-900 rounded-3xl p-8 text-white shadow-xl overflow-hidden">
                <div class="absolute top-0 right-0 -mt-12 -mr-12 w-64 h-64 bg-emerald-600/20 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <span class="inline-block px-3 py-1 bg-emerald-500/20 border border-emerald-400/30 rounded-full text-xs font-medium text-emerald-200 mb-3">
                            Panel Operasional Admin
                        </span>
                        <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                            Selamat Datang di Indo Nyaman! 👋
                        </h3>
                        <p class="mt-2 text-emerald-100/80 text-sm max-w-xl leading-relaxed">
                            Kelola paket harga, ulasan testimoni pelanggan, dan foto galeri portofolio layanan Anda dengan mudah dalam satu tempat.
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Total Paket & Harga</p>
                        <h4 class="text-3xl font-extrabold text-slate-800 mt-1">{{ $totalPaket }}</h4>
                        <p class="text-xs text-emerald-600 font-medium mt-1">📦 Layanan terdaftar</p>
                    </div>
                    <div class="w-14 h-14 bg-emerald-50 text-emerald-700 rounded-2xl flex items-center justify-center text-2xl font-bold border border-emerald-100">
                        📦
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Total Testimoni</p>
                        <h4 class="text-3xl font-extrabold text-slate-800 mt-1">{{ $totalTestimoni }}</h4>
                        <p class="text-xs text-amber-600 font-medium mt-1">💬 Ulasan pelanggan</p>
                    </div>
                    <div class="w-14 h-14 bg-amber-50 text-amber-700 rounded-2xl flex items-center justify-center text-2xl font-bold border border-amber-100">
                        💬
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider">Total Foto Galeri</p>
                        <h4 class="text-3xl font-extrabold text-slate-800 mt-1">{{ $totalGaleri }}</h4>
                        <p class="text-xs text-blue-600 font-medium mt-1">🖼️ Portofolio aktif</p>
                    </div>
                    <div class="w-14 h-14 bg-blue-50 text-blue-700 rounded-2xl flex items-center justify-center text-2xl font-bold border border-blue-100">
                        🖼️
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl p-6 border border-slate-100 shadow-sm space-y-4">
                <h4 class="font-bold text-slate-800 text-lg">Aksi Cepat</h4>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="{{ route('pricing-packages.create') }}" 
                       class="flex items-center gap-3 p-4 rounded-2xl bg-emerald-50/60 hover:bg-emerald-100/70 border border-emerald-200/50 transition">
                        <span class="w-8 h-8 rounded-xl bg-emerald-600 text-white font-bold flex items-center justify-center text-sm">+</span>
                        <div>
                            <p class="text-sm font-bold text-emerald-950">Tambah Paket Baru</p>
                            <p class="text-xs text-emerald-700">Buat variasi harga baru</p>
                        </div>
                    </a>

                    <a href="{{ route('testimonials.create') }}" 
                       class="flex items-center gap-3 p-4 rounded-2xl bg-amber-50/60 hover:bg-amber-100/70 border border-amber-200/50 transition">
                        <span class="w-8 h-8 rounded-xl bg-amber-600 text-white font-bold flex items-center justify-center text-sm">+</span>
                        <div>
                            <p class="text-sm font-bold text-amber-950">Tambah Testimoni</p>
                            <p class="text-xs text-amber-700">Input ulasan pelanggan</p>
                        </div>
                    </a>

                    <a href="{{ route('gallery-items.create') }}" 
                       class="flex items-center gap-3 p-4 rounded-2xl bg-blue-50/60 hover:bg-blue-100/70 border border-blue-200/50 transition">
                        <span class="w-8 h-8 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-sm">+</span>
                        <div>
                            <p class="text-sm font-bold text-blue-950">Upload Foto Galeri</p>
                            <p class="text-xs text-blue-700">Tambahkan dokumentasi</p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>