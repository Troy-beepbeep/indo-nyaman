<header x-data="{ mobileOpen: false }" class="sticky top-0 z-50 border-b border-sage/30 bg-cream/90 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
        
        <!-- Logo -->
        <a href="{{ url('/') }}" class="font-display text-xl font-semibold text-brand-dark">
            Indo Nyaman
        </a>

        <!-- Menu Navigasi Desktop -->
        <nav class="hidden items-center gap-8 text-sm font-medium text-ink/80 md:flex">
            <a href="#layanan" class="hover:text-brand">
                <span x-show="lang === 'id'">Layanan</span><span x-show="lang === 'en'" x-cloak>Services</span>
            </a>
            <a href="#area" class="hover:text-brand">
                <span x-show="lang === 'id'">Area Layanan</span><span x-show="lang === 'en'" x-cloak>Service Areas</span>
            </a>
            <a href="#kenapa-kami" class="hover:text-brand">
                <span x-show="lang === 'id'">Kenapa Kami</span><span x-show="lang === 'en'" x-cloak>Why Us</span>
            </a>
            <a href="#galeri" class="hover:text-brand">
                <span x-show="lang === 'id'">Galeri</span><span x-show="lang === 'en'" x-cloak>Gallery</span>
            </a>
            <a href="#faq" class="hover:text-brand">
                <span x-show="lang === 'id'">FAQ</span><span x-show="lang === 'en'" x-cloak>FAQ</span>
            </a>
            <a href="#paket" class="hover:text-brand">
                <span x-show="lang === 'id'">Paket</span><span x-show="lang === 'en'" x-cloak>Pricing</span>
            </a>
            <a href="#kontak" class="hover:text-brand">
                <span x-show="lang === 'id'">Kontak</span><span x-show="lang === 'en'" x-cloak>Contact</span>
            </a>
        </nav>

        <!-- Tombol Desktop (Switcher Bahasa + WhatsApp) -->
        <div class="hidden items-center gap-4 md:flex">
            <div class="inline-flex items-center p-1 bg-slate-100/80 rounded-full border border-slate-200 text-xs font-bold">
                <button type="button" @click="setLang('id')" 
                    :class="lang === 'id' ? 'bg-brand text-cream shadow-sm' : 'text-ink/70 hover:text-ink'"
                    class="px-2.5 py-1.5 rounded-full transition duration-200 flex items-center gap-1 cursor-pointer">
                    🇮🇩 <span>ID</span>
                </button>
                <button type="button" @click="setLang('en')" 
                    :class="lang === 'en' ? 'bg-brand text-cream shadow-sm' : 'text-ink/70 hover:text-ink'"
                    class="px-2.5 py-1.5 rounded-full transition duration-200 flex items-center gap-1 cursor-pointer">
                    🇬🇧 <span>EN</span>
                </button>
            </div>

            <a href="https://wa.me/{{ config('services.whatsapp.number') }}" target="_blank"
               class="rounded-full bg-brand px-5 py-2 text-sm font-semibold text-cream transition hover:bg-brand-dark">
                Chat WA
            </a>
        </div>

        <!-- Tombol Mobile (Switcher Bahasa + Hamburger Menu) -->
        <div class="flex items-center gap-3 md:hidden">
            <div class="inline-flex items-center p-0.5 bg-slate-100/80 rounded-full border border-slate-200 text-xs font-bold">
                <button type="button" @click="setLang('id')" 
                    :class="lang === 'id' ? 'bg-brand text-cream shadow-sm' : 'text-ink/70'"
                    class="px-2 py-1 rounded-full transition duration-200 cursor-pointer">
                    🇮🇩
                </button>
                <button type="button" @click="setLang('en')" 
                    :class="lang === 'en' ? 'bg-brand text-cream shadow-sm' : 'text-ink/70'"
                    class="px-2 py-1 rounded-full transition duration-200 cursor-pointer">
                    🇬🇧
                </button>
            </div>

            <button @click="mobileOpen = !mobileOpen" class="rounded-md p-1.5 text-ink" aria-label="Buka menu">
                <svg x-show="!mobileOpen" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileOpen" x-cloak class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Dropdown Menu Mobile -->
    <div x-show="mobileOpen" x-cloak @click.outside="mobileOpen = false" class="border-t border-sage/30 bg-cream md:hidden">
        <nav class="flex flex-col gap-1 px-6 py-4 text-sm font-medium text-ink/80">
            <a href="#layanan" @click="mobileOpen = false" class="py-2 hover:text-brand">
                <span x-show="lang === 'id'">Layanan</span><span x-show="lang === 'en'" x-cloak>Services</span>
            </a>
            <a href="#area" @click="mobileOpen = false" class="py-2 hover:text-brand">
                <span x-show="lang === 'id'">Area Layanan</span><span x-show="lang === 'en'" x-cloak>Service Areas</span>
            </a>
            <a href="#kenapa-kami" @click="mobileOpen = false" class="py-2 hover:text-brand">
                <span x-show="lang === 'id'">Kenapa Kami</span><span x-show="lang === 'en'" x-cloak>Why Us</span>
            </a>
            <a href="#galeri" @click="mobileOpen = false" class="py-2 hover:text-brand">
                <span x-show="lang === 'id'">Galeri</span><span x-show="lang === 'en'" x-cloak>Gallery</span>
            </a>
            <a href="#faq" @click="mobileOpen = false" class="py-2 hover:text-brand">
                <span x-show="lang === 'id'">FAQ</span><span x-show="lang === 'en'" x-cloak>FAQ</span>
            </a>
            <a href="#paket" @click="mobileOpen = false" class="py-2 hover:text-brand">
                <span x-show="lang === 'id'">Paket</span><span x-show="lang === 'en'" x-cloak>Pricing</span>
            </a>
            <a href="#kontak" @click="mobileOpen = false" class="py-2 hover:text-brand">
                <span x-show="lang === 'id'">Kontak</span><span x-show="lang === 'en'" x-cloak>Contact</span>
            </a>
            
            <a href="https://wa.me/{{ config('services.whatsapp.number') }}" target="_blank"
               class="mt-4 rounded-full bg-brand px-5 py-2.5 text-center text-cream shadow-sm">
                Chat WA
            </a>
        </nav>
    </div>
</header>