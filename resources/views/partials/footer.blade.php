<footer class="border-t border-sage/30 bg-white">
    <div class="mx-auto grid max-w-6xl gap-8 px-6 py-12 md:grid-cols-3">
        <div>
            <p class="font-display text-lg font-semibold text-brand-dark">Indo Nyaman</p>
            <p class="mt-2 text-sm text-ink/70">Jasa cleaning & garden terpercaya buat rumah, kos, dan villa di Bali.</p>
        </div>
        <div class="text-sm text-ink/70">
            <p class="font-semibold text-ink">Kontak</p>
            <p class="mt-2">WhatsApp: {{ config('services.whatsapp.display') }}</p>
        </div>
        <div class="text-sm text-ink/70">
    <p class="font-semibold text-ink">Area Layanan</p>
            <p class="mt-2">Denpasar · Ubud · Canggu · Sanur · Gianyar</p>
        </div>
    </div>
    <div class="border-t border-sage/20 py-4 text-center text-xs text-ink/50">
        © {{ date('Y') }} Indo Nyaman. Semua hak dilindungi.
    </div>
</footer>