<x-guest-layout>
    <div class="min-h-screen flex flex-col md:flex-row bg-slate-50">
        
        <div class="hidden md:flex md:w-1/2 bg-emerald-900 text-white p-12 flex-col justify-between relative overflow-hidden">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-emerald-800 rounded-full blur-3xl opacity-50 pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-emerald-700 rounded-full blur-3xl opacity-30 pointer-events-none"></div>

            <div class="relative z-10 flex items-center gap-3">
                <div class="w-10 h-10 bg-emerald-700/80 border border-emerald-500/30 rounded-xl flex items-center justify-center font-bold text-xl text-emerald-200">
                    🌿
                </div>
                <span class="font-bold text-xl tracking-wide text-emerald-100">Indo Nyaman</span>
            </div>

            <div class="relative z-10 my-auto py-12">
                <span class="inline-block px-3 py-1 bg-emerald-800/80 border border-emerald-600/40 rounded-full text-xs font-semibold text-emerald-300 uppercase tracking-wider mb-4">
                    Admin Control Panel
                </span>
                <h1 class="text-4xl font-extrabold leading-tight text-white mb-4">
                    Kelola Layanan Rumah & Taman dengan Lebih Mudah.
                </h1>
                <p class="text-emerald-200/80 text-base leading-relaxed">
                    Akses penuh untuk memperbarui paket harga, testimoni pelanggan, dan galeri pengerjaan dalam satu tempat yang nyaman.
                </p>

                <div class="mt-8 space-y-3">
                    <div class="flex items-center gap-3 text-sm text-emerald-100/90">
                        <span class="w-5 h-5 bg-emerald-700/60 rounded-full flex items-center justify-center text-xs text-emerald-300 font-bold">✓</span>
                        <span>Update Harga & Paket Real-time</span>
                    </div>
                    <div class="flex items-center gap-3 text-sm text-emerald-100/90">
                        <span class="w-5 h-5 bg-emerald-700/60 rounded-full flex items-center justify-center text-xs text-emerald-300 font-bold">✓</span>
                        <span>Manajemen Testimoni & Galeri Foto</span>
                    </div>
                </div>
            </div>

            <div class="relative z-10 text-xs text-emerald-300/60">
                © {{ date('Y') }} Indo Nyaman. All rights reserved.
            </div>
        </div>

        <div class="w-full md:w-1/2 flex items-center justify-center p-6 sm:p-12">
            <div class="w-full max-w-md bg-white p-8 sm:p-10 rounded-3xl shadow-xl shadow-slate-200/60 border border-slate-100">
                
                <div class="mb-8">
                    <div class="flex md:hidden items-center gap-2 mb-4">
                        <span class="text-2xl">🌿</span>
                        <span class="font-bold text-lg text-emerald-900">Indo Nyaman</span>
                    </div>
                    <h2 class="text-2xl font-bold text-slate-800">Selamat Datang Kembali! 👋</h2>
                    <p class="text-sm text-slate-500 mt-1">Masukkan email & kata sandi admin Anda.</p>
                </div>

                <x-auth-session-status class="mb-6" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-1.5">
                            Alamat Email
                        </label>
                        <div class="relative">
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username"
                                   placeholder="admin@indonyaman.com"
                                   class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-600 focus:ring-2 focus:ring-emerald-600/20 text-slate-800 text-sm transition placeholder:text-slate-400">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="block text-sm font-semibold text-slate-700">
                                Kata Sandi
                            </label>
                        </div>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                               placeholder="••••••••"
                               class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-600 focus:ring-2 focus:ring-emerald-600/20 text-slate-800 text-sm transition placeholder:text-slate-400">
                        <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
                    </div>

                    <div class="flex items-center justify-between pt-1">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input id="remember_me" type="checkbox" name="remember" 
                                   class="rounded-md border-slate-300 text-emerald-700 shadow-sm focus:ring-emerald-600 w-4 h-4">
                            <span class="ms-2 text-sm text-slate-600 font-medium">Ingat Saya</span>
                        </label>
                    </div>

                    <div class="pt-3">
                        <button type="submit" 
                                class="w-full py-3.5 px-4 bg-emerald-800 hover:bg-emerald-900 active:bg-emerald-950 text-white font-semibold rounded-xl shadow-lg shadow-emerald-900/20 hover:shadow-xl hover:shadow-emerald-900/30 transition duration-200 text-sm">
                            Masuk ke Dashboard →
                        </button>
                    </div>
                </form>

                <div class="mt-8 pt-6 border-t border-slate-100 text-center">
                    <a href="{{ url('/') }}" class="text-xs text-slate-500 hover:text-emerald-700 transition font-medium inline-flex items-center gap-1">
                        ← Kembali ke Halaman Utama Website
                    </a>
                </div>

            </div>
        </div>

    </div>
</x-guest-layout>