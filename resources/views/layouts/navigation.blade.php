<nav x-data="{ open: false }" class="bg-white/90 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            
            <div class="flex items-center gap-8">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo />
                    </a>
                </div>

                <div class="hidden md:flex items-center gap-1.5 bg-slate-100/70 p-1.5 rounded-2xl border border-slate-200/60">
                    
                    <a href="{{ route('dashboard') }}" 
                       class="px-4 py-2 rounded-xl text-xs font-bold transition duration-150 flex items-center gap-2 {{ request()->routeIs('dashboard') ? 'bg-white text-emerald-900 shadow-sm shadow-slate-200' : 'text-slate-600 hover:text-slate-900 hover:bg-white/50' }}">
                        <span>📊</span>
                        <span>Dashboard</span>
                    </a>

                    <a href="{{ route('pricing-packages.index') }}" 
                       class="px-4 py-2 rounded-xl text-xs font-bold transition duration-150 flex items-center gap-2 {{ request()->routeIs('pricing-packages.*') ? 'bg-white text-emerald-900 shadow-sm shadow-slate-200' : 'text-slate-600 hover:text-slate-900 hover:bg-white/50' }}">
                        <span>📦</span>
                        <span>Paket & Harga</span>
                    </a>

                    <a href="{{ route('testimonials.index') }}" 
                       class="px-4 py-2 rounded-xl text-xs font-bold transition duration-150 flex items-center gap-2 {{ request()->routeIs('testimonials.*') ? 'bg-white text-emerald-900 shadow-sm shadow-slate-200' : 'text-slate-600 hover:text-slate-900 hover:bg-white/50' }}">
                        <span>💬</span>
                        <span>Testimoni</span>
                    </a>

                    <a href="{{ route('gallery-items.index') }}" 
                       class="px-4 py-2 rounded-xl text-xs font-bold transition duration-150 flex items-center gap-2 {{ request()->routeIs('gallery-items.*') ? 'bg-white text-emerald-900 shadow-sm shadow-slate-200' : 'text-slate-600 hover:text-slate-900 hover:bg-white/50' }}">
                        <span>🖼️</span>
                        <span>Galeri</span>
                    </a>

                    <a href="{{ route('bookings.index') }}" 
   class="px-4 py-2 rounded-xl text-xs font-bold transition duration-150 flex items-center gap-2 {{ request()->routeIs('bookings.*') ? 'bg-white text-emerald-900 shadow-sm shadow-slate-200' : 'text-slate-600 hover:text-slate-900 hover:bg-white/50' }}">
    <span>📋</span>
    <span>Daftar Pesanan</span>
</a>

                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-3 px-3.5 py-2 border border-slate-200/80 rounded-2xl text-xs font-bold text-slate-700 bg-slate-50 hover:bg-slate-100 hover:border-slate-300 focus:outline-none transition duration-150 shadow-sm">
                            
                            <div class="w-8 h-8 rounded-xl bg-emerald-800 text-white font-extrabold flex items-center justify-center text-sm shadow-sm">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>

                            <div class="text-left hidden lg:block">
                                <div class="text-xs font-bold text-slate-800">{{ Auth::user()->name }}</div>
                                <div class="text-[10px] font-medium text-emerald-700">Administrator</div>
                            </div>

                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3 border-b border-slate-100">
                            <p class="text-xs text-slate-400 font-medium">Akun Login:</p>
                            <p class="text-xs font-bold text-slate-800 truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <x-dropdown-link :href="route('profile.edit')" class="text-xs font-semibold py-2.5">
                            ⚙️ {{ __('Pengaturan Profil') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();"
                                    class="text-xs font-semibold py-2.5 text-rose-600 hover:bg-rose-50">
                                🚪 {{ __('Keluar (Log Out)') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="p-2.5 rounded-xl text-slate-500 hover:text-slate-700 hover:bg-slate-100 focus:outline-none transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-slate-200 bg-white p-4 space-y-2">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold {{ request()->routeIs('dashboard') ? 'bg-emerald-50 text-emerald-900' : 'text-slate-600' }}">
            <span>📊</span> Dashboard
        </a>
        <a href="{{ route('pricing-packages.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold {{ request()->routeIs('pricing-packages.*') ? 'bg-emerald-50 text-emerald-900' : 'text-slate-600' }}">
            <span>📦</span> Paket & Harga
        </a>
        <a href="{{ route('testimonials.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold {{ request()->routeIs('testimonials.*') ? 'bg-emerald-50 text-emerald-900' : 'text-slate-600' }}">
            <span>💬</span> Testimoni
        </a>
        <a href="{{ route('gallery-items.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold {{ request()->routeIs('gallery-items.*') ? 'bg-emerald-50 text-emerald-900' : 'text-slate-600' }}">
            <span>🖼️</span> Galeri
        </a>
        <a href="{{ route('bookings.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-xs font-bold {{ request()->routeIs('bookings.*') ? 'bg-emerald-50 text-emerald-900' : 'text-slate-600' }}">
    <span>📋</span> Daftar Pesanan
</a>


        <div class="pt-4 border-t border-slate-100">
            <div class="px-4 py-2">
                <div class="font-bold text-xs text-slate-800">{{ Auth::user()->name }}</div>
                <div class="text-[11px] text-slate-500">{{ Auth::user()->email }}</div>
            </div>
            <form method="POST" action="{{ route('login') }}" class="mt-2">
                @csrf
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-xs font-bold text-rose-600">
                    🚪 Log Out
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</nav>