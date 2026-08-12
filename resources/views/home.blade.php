@extends('layouts.site')

@section('title', 'Indo Nyaman — Jasa Cleaning & Garden Service Bali')
@section('meta_description', 'Jasa cleaning rumah, kos, dan garden service profesional di Denpasar, Ubud, Canggu, Sanur, dan Gianyar. Booking gampang lewat WhatsApp, harga transparan.')

@section('content')

<!-- ================= 1. SECTION HERO ================= -->
<section class="relative overflow-hidden fade-in-up">
    <div class="mx-auto grid max-w-6xl gap-12 px-6 py-20 md:grid-cols-2 md:items-center md:py-28">
        <div>
            <span class="inline-block rounded-full bg-sage/20 px-4 py-1 text-xs font-semibold uppercase tracking-wide text-brand-dark"
                  x-text="lang === 'id' ? 'Cleaning & Garden Service · Bali' : 'Bali Cleaning & Garden Service'">
            </span>
            
            <h1 class="mt-5 font-display text-4xl font-semibold leading-tight text-ink md:text-5xl">
                <span x-show="lang === 'id'">Rumah bersih, taman rapi, <span class="text-brand">tanpa Anda kelelahan</span></span>
                <span x-show="lang === 'en'" x-cloak>Clean home, lush garden, <span class="text-brand">without the exhaustion</span></span>
            </h1>

            <p class="mt-5 max-w-md text-base text-ink/70"
               x-text="lang === 'id' 
                   ? 'Indo Nyaman membantu bersih-bersih rumah/kos sampai rawat taman Anda — dikerjakan tim yang teliti, on-time, dan gampang dipanggil lewat WhatsApp.' 
                   : 'Indo Nyaman helps clean your home/kos and maintain your garden — handled by meticulous, on-time professionals easily booked via WhatsApp.'">
            </p>

            <div class="mt-8 flex flex-wrap gap-4">
                <a href="https://wa.me/{{ config('services.whatsapp.number') }}" target="_blank"
                   class="rounded-full bg-brand px-6 py-3 text-sm font-semibold text-cream transition hover:bg-brand-dark"
                   x-text="lang === 'id' ? 'Pesan via WhatsApp' : 'Book via WhatsApp'">
                </a>
                <a href="#layanan" class="rounded-full border border-brand/30 px-6 py-3 text-sm font-semibold text-brand-dark transition hover:bg-brand/10"
                   x-text="lang === 'id' ? 'Lihat Layanan' : 'View Services'">
                </a>
            </div>
        </div>

        <div class="relative mx-auto aspect-square w-full max-w-md">
            <div class="absolute inset-0 rounded-[40%_60%_60%_40%/50%_40%_60%_50%] bg-sage/30"></div>
            <div class="absolute inset-6 rounded-[55%_45%_45%_55%/45%_55%_45%_55%] bg-brand/20"></div>
           <div class="absolute inset-12 overflow-hidden rounded-[45%_55%_55%_45%/55%_45%_55%_45%] bg-white shadow-xl">
    <img src="{{ asset('images/hero-photo.jpg') }}" alt="Tim Indo Nyaman sedang bekerja" class="h-full w-full object-cover">
</div>
        </div>
    </div>
</section>

<!-- ================= 2. SECTION LAYANAN ================= -->
<section id="layanan" class="bg-cream fade-in-up">
    <div class="mx-auto max-w-6xl px-6 py-20">
        <div class="max-w-xl">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand" x-text="lang === 'id' ? 'Layanan Kami' : 'Our Services'"></span>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink md:text-4xl"
                x-text="lang === 'id' ? 'Dua kebutuhan, satu tim yang sama' : 'Two needs, one dedicated team'">
            </h2>
            <p class="mt-4 text-ink/70" x-text="lang === 'id' ? 'Dari rumah kotor sampai taman gersang, Indo Nyaman siap turun tangan.' : 'From dirty homes to barren gardens, Indo Nyaman is ready to help.'"></p>
        </div>

        <div class="mt-12 grid gap-10 lg:grid-cols-2">
            <div>
                <div class="inline-flex items-center gap-2 rounded-full bg-brand/10 px-4 py-1.5 text-sm font-semibold text-brand-dark">
                    <span>🧹</span> Cleaning Service
                </div>
                <div class="mt-5 space-y-4">
                    <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-sage/20">
                        <h3 class="font-semibold text-ink" x-text="lang === 'id' ? 'Bersih Rumah & Apartemen' : 'Home & Apartment Cleaning'"></h3>
                        <p class="mt-1 text-sm text-ink/70" x-text="lang === 'id' ? 'Bersih menyeluruh buat rumah tinggal atau unit apartemen, rutin atau sekali panggil.' : 'Thorough cleaning for your house or apartment unit, scheduled or one-time.'"></p>
                    </div>
                    <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-sage/20">
                        <h3 class="font-semibold text-ink" x-text="lang === 'id' ? 'Bersih Kos & Kontrakan' : 'Kos & Rental Cleaning'"></h3>
                        <p class="mt-1 text-sm text-ink/70" x-text="lang === 'id' ? 'Paket langganan buat pemilik kos yang mau unit-nya selalu siap huni.' : 'Subscription packages for property owners to keep units move-in ready.'"></p>
                    </div>
                    <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-sage/20">
                        <h3 class="font-semibold text-ink">Deep Cleaning</h3>
                        <p class="mt-1 text-sm text-ink/70" x-text="lang === 'id' ? 'Sikat sampai sudut-sudut yang susah dijangkau — dapur, kamar mandi, hingga jendela.' : 'Scrubbing hard-to-reach corners — kitchens, bathrooms, and windows.'"></p>
                    </div>
                    <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-sage/20">
                        <h3 class="font-semibold text-ink" x-text="lang === 'id' ? 'Bersih Pasca Renovasi' : 'Post-Renovation Cleaning'"></h3>
                        <p class="mt-1 text-sm text-ink/70" x-text="lang === 'id' ? 'Bereskan debu & sisa material habis renovasi atau bangun baru.' : 'Clear out dust and leftover materials after renovation or new construction.'"></p>
                    </div>
                </div>
            </div>

            <div>
                <div class="inline-flex items-center gap-2 rounded-full bg-clay/10 px-4 py-1.5 text-sm font-semibold text-clay">
                    <span>🌿</span> Garden Service
                </div>
                <div class="mt-5 space-y-4">
                    <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-sage/20">
                        <h3 class="font-semibold text-ink" x-text="lang === 'id' ? 'Potong Rumput & Rapikan' : 'Lawn Mowing & Trimming'"></h3>
                        <p class="mt-1 text-sm text-ink/70" x-text="lang === 'id' ? 'Rumput dipotong rapi, sisa potongan dibersihkan, taman langsung enak dipandang.' : 'Neatly mowed lawns, cleared clippings, making your garden instantly pleasing.'"></p>
                    </div>
                    <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-sage/20">
                        <h3 class="font-semibold text-ink" x-text="lang === 'id' ? 'Perawatan Taman Rutin' : 'Routine Garden Maintenance'"></h3>
                        <p class="mt-1 text-sm text-ink/70" x-text="lang === 'id' ? 'Siram, pupuk, kontrol hama — taman tetap hijau tanpa Anda repot pikirkan jadwal.' : 'Watering, fertilizing, pest control — keeping your garden green without the hassle.'"></p>
                    </div>
                    <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-sage/20">
                        <h3 class="font-semibold text-ink" x-text="lang === 'id' ? 'Pembuatan Taman Baru' : 'New Garden Landscaping'"></h3>
                        <p class="mt-1 text-sm text-ink/70" x-text="lang === 'id' ? 'Dari lahan kosong jadi taman konsep, termasuk pemilihan tanaman yang cocok.' : 'Transforming empty plots into conceptual gardens, including plant selection.'"></p>
                    </div>
                    <div class="rounded-xl bg-white p-5 shadow-sm ring-1 ring-sage/20">
                        <h3 class="font-semibold text-ink" x-text="lang === 'id' ? 'Pangkas Pohon & Semak' : 'Tree & Shrub Pruning'"></h3>
                        <p class="mt-1 text-sm text-ink/70" x-text="lang === 'id' ? 'Rapiin pohon & semak yang sudah mulai liar biar tidak makan tempat.' : 'Trimming overgrown trees and shrubs to keep them neat and space-efficient.'"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= 3. SECTION AREA ================= -->
<section id="area" class="border-t border-sage/20 bg-white fade-in-up">
    <div class="mx-auto max-w-6xl px-6 py-20">
        <div class="max-w-xl">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand" x-text="lang === 'id' ? 'Area Layanan' : 'Service Areas'"></span>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink md:text-4xl"
                x-text="lang === 'id' ? 'Kami jangkau area berikut di Bali' : 'We cover these areas in Bali'">
            </h2>
            <p class="mt-4 text-ink/70" x-text="lang === 'id' ? 'Belum lihat area Anda di bawah? Tetap tanya dulu lewat WhatsApp, kadang masih bisa diatur.' : 'Don\'t see your area below? Ask us on WhatsApp, we might still be able to arrange it.'"></p>
        </div>

        <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
            @foreach (['Denpasar', 'Ubud', 'Canggu', 'Sanur', 'Gianyar'] as $area)
                <div class="flex items-center gap-3 rounded-xl border border-sage/30 bg-cream/50 p-4">
                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-brand/10 text-brand-dark">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </span>
                    <span class="font-medium text-ink">{{ $area }}</span>
                </div>
            @endforeach
        </div>

       <div class="mt-10 overflow-hidden rounded-2xl border border-sage/30 shadow-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252438.5828453489!2d115.0883838!3d-8.6524973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2409b0e5e80db%3A0xe27332e7e32b12b2!2sDenpasar%2C%20Bali!5e0!3m2!1sid!2sid!4v1700000000000!5m2!1sid!2sid" class="h-80 w-full" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Peta area layanan Indo Nyaman di Bali"></iframe>
        </div>
    </div>
</section>

<!-- ================= 4. SECTION KENAPA KAMI ================= -->
<section id="kenapa-kami" class="border-t border-sage/20 bg-white fade-in-up">
    <div class="mx-auto max-w-6xl px-6 py-20">
        <div class="max-w-xl">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand" x-text="lang === 'id' ? 'Kenapa Pilih Kami' : 'Why Choose Us'"></span>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink md:text-4xl"
                x-text="lang === 'id' ? 'Bukan cuma bersih-bersih, tapi kerja yang bisa Anda percaya' : 'Not just cleaning, but a service you can fully trust'">
            </h2>
        </div>

        <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <div class="rounded-2xl border border-sage/30 bg-cream/60 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand/10 text-2xl">🛡️</div>
                <h3 class="mt-4 font-display text-lg font-semibold text-ink" x-text="lang === 'id' ? 'Tim Terpercaya' : 'Trusted Team'"></h3>
                <p class="mt-2 text-sm text-ink/70" x-text="lang === 'id' ? 'Petugas terlatih & diseleksi, jadi Anda tidak perlu was-was tinggalkan rumah ke tangan orang baru.' : 'Trained & selected staff, so you don\'t have to worry about leaving your home to strangers.'"></p>
            </div>

            <div class="rounded-2xl border border-sage/30 bg-cream/60 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand/10 text-2xl">⏱️</div>
                <h3 class="mt-4 font-display text-lg font-semibold text-ink" x-text="lang === 'id' ? 'Tepat Waktu' : 'On Time'"></h3>
                <p class="mt-2 text-sm text-ink/70" x-text="lang === 'id' ? 'Janji jam datang, ya jam segitu nongol. Tidak ada drama &quot;otw&quot; selama berjam-jam.' : 'We arrive when we say we will. No more waiting around for hours.'"></p>
            </div>

            <div class="rounded-2xl border border-sage/30 bg-cream/60 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand/10 text-2xl">💸</div>
                <h3 class="mt-4 font-display text-lg font-semibold text-ink" x-text="lang === 'id' ? 'Harga Transparan' : 'Transparent Pricing'"></h3>
                <p class="mt-2 text-sm text-ink/70" x-text="lang === 'id' ? 'Estimasi biaya dikasih di depan lewat WhatsApp. Tidak ada biaya yang terselip belakangan.' : 'Cost estimates are provided upfront via WhatsApp. No hidden or surprise fees.'"></p>
            </div>

            <div class="rounded-2xl border border-sage/30 bg-cream/60 p-6">
                <div class="flex h-12 w-12 items-center justify-center rounded-full bg-brand/10 text-2xl">💬</div>
                <h3 class="mt-4 font-display text-lg font-semibold text-ink" x-text="lang === 'id' ? 'Booking Gampang' : 'Easy Booking'"></h3>
                <p class="mt-2 text-sm text-ink/70" x-text="lang === 'id' ? 'Tinggal chat WhatsApp, jadwalkan, selesai. Tidak perlu install aplikasi apapun.' : 'Just chat on WhatsApp, schedule it, and you\'re done. No app installation needed.'"></p>
            </div>
        </div>
    </div>
</section>

<!-- ================= 5. SECTION TESTIMONI ================= -->
<section id="testimoni" class="border-t border-sage/20 bg-white fade-in-up">
    <div class="mx-auto max-w-6xl px-6 py-20">
        <div class="max-w-xl">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand" x-text="lang === 'id' ? 'Testimoni' : 'Reviews'"></span>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink md:text-4xl"
                x-text="lang === 'id' ? 'Kata mereka yang sudah mencoba' : 'What our clients say'">
            </h2>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            @forelse ($testimonials as $testimonial)
                <div class="rounded-2xl border border-sage/30 bg-cream/40 p-6">
                    <div class="text-clay">
                        {{ str_repeat('★', $testimonial->rating) }}{{ str_repeat('☆', 5 - $testimonial->rating) }}
                    </div>
                    <p class="mt-4 text-sm text-ink/80">
                        "{{ $testimonial->quote }}"
                    </p>
                    <div class="mt-5 flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center rounded-full bg-brand/10 font-display text-sm font-semibold text-brand-dark">
                            {{ $testimonial->initials }}
                        </div>
                        <div>
                            <p class="text-sm font-semibold text-ink">{{ $testimonial->name }}</p>
                            <p class="text-xs text-ink/60">{{ $testimonial->role }}</p>
                        </div>
                    </div>
                </div>
           @empty
              <div class="md:col-span-3 rounded-2xl border border-dashed border-sage/40 bg-cream/40 p-10 text-center">
                  <p class="text-ink/60" x-text="lang === 'id' ? 'Belum ada testimoni yang ditampilkan.' : 'No reviews to show yet.'"></p>
              </div>
          @endforelse
        </div>
    </div>
</section>

<!-- ================= 6. SECTION GALERI ================= -->
<section id="galeri" class="bg-cream fade-in-up" x-data="{ activeFilter: 'all', modalImage: null, modalLabel: '' }">
    <div class="mx-auto max-w-6xl px-6 py-20">
        <div class="max-w-xl">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand" x-text="lang === 'id' ? 'Galeri' : 'Gallery'"></span>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink md:text-4xl"
                x-text="lang === 'id' ? 'Contoh hasil kerja kami' : 'Our portfolio of work'">
            </h2>
            <p class="mt-4 text-ink/70" x-text="lang === 'id' ? 'Beberapa dokumentasi dari pekerjaan cleaning & garden yang sudah kita kerjakan.' : 'Some visual documentation of the cleaning & garden projects we have completed.'"></p>
        </div>

        <div class="mt-8 flex flex-wrap gap-2">
            <button @click="activeFilter = 'all'"
                    :class="activeFilter === 'all' ? 'bg-brand text-cream' : 'bg-white text-ink/70 hover:bg-sage/20'"
                    class="rounded-full border border-sage/30 px-5 py-2 text-xs font-semibold transition"
                    x-text="lang === 'id' ? 'Semua Foto' : 'All Photos'">
            </button>
            <button @click="activeFilter = 'Cleaning'"
                    :class="activeFilter === 'Cleaning' ? 'bg-brand text-cream' : 'bg-white text-ink/70 hover:bg-sage/20'"
                    class="rounded-full border border-sage/30 px-5 py-2 text-xs font-semibold transition">
                🧹 Cleaning Service
            </button>
            <button @click="activeFilter = 'Garden'"
                    :class="activeFilter === 'Garden' ? 'bg-brand text-cream' : 'bg-white text-ink/70 hover:bg-sage/20'"
                    class="rounded-full border border-sage/30 px-5 py-2 text-xs font-semibold transition">
                🌿 Garden Service
            </button>
        </div>

        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($galleryItems as $item)
                <div x-show="activeFilter === 'all' || activeFilter === '{{ $item->tag }}'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     @click="modalImage = '{{ $item->image ? $item->image_url : '' }}'; modalLabel = '{{ $item->label }}'"
                     class="group relative aspect-square cursor-pointer overflow-hidden rounded-2xl border border-sage/30 bg-white shadow-sm transition hover:shadow-md">
                    
                    @if ($item->image)
                        <img src="{{ $item->image_url }}" alt="{{ $item->label }}" class="h-full w-full object-cover transition duration-300 group-hover:scale-105">
                    @else
                        <div class="flex h-full w-full flex-col items-center justify-center gap-2 bg-slate-50 text-ink/40 transition group-hover:bg-slate-100">
                            <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14M14 8h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span class="px-4 text-center text-xs font-medium">{{ $item->label }}</span>
                        </div>
                    @endif

                    <span class="absolute left-3 top-3 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-ink/70 shadow-sm backdrop-blur-sm">
                        {{ $item->tag }}
                    </span>

                    <div class="absolute inset-0 flex items-center justify-center bg-black/30 opacity-0 transition group-hover:opacity-100">
                        <span class="rounded-full bg-white/90 p-2.5 text-xs font-bold text-ink shadow" x-text="lang === 'id' ? '🔍 Perbesar' : '🔍 Enlarge'"></span>
                    </div>
                </div>
           @empty
              <div class="sm:col-span-2 lg:col-span-3 rounded-2xl border border-dashed border-sage/40 bg-white p-10 text-center">
                  <p class="text-ink/60" x-text="lang === 'id' ? 'Belum ada foto di galeri.' : 'No photos in the gallery yet.'"></p>
              </div>
          @endforelse
        </div>
        <p class="mt-6 text-center text-sm text-ink/50" x-text="lang === 'id' ? 'Klik pada gambar untuk melihat tampilan lebih besar.' : 'Click on an image to view it in full size.'"></p>
    </div>

    <div x-show="modalImage !== null" x-cloak @keydown.escape.window="modalImage = null"
         class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-4 backdrop-blur-sm"
         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        
        <div @click.away="modalImage = null" class="relative max-w-4xl overflow-hidden rounded-2xl bg-white shadow-2xl">
            <button @click="modalImage = null" class="absolute right-3 top-3 z-10 flex h-9 w-9 items-center justify-center rounded-full bg-black/60 text-white hover:bg-black">✕</button>
            <template x-if="modalImage !== ''">
                <img :src="modalImage" :alt="modalLabel" class="max-h-[80vh] w-auto object-contain">
            </template>
            <template x-if="modalImage === ''">
                <div class="flex h-80 w-96 flex-col items-center justify-center gap-3 p-8 text-center text-slate-500">
                    <span class="text-4xl">📷</span>
                    <p class="font-semibold text-slate-700" x-text="modalLabel"></p>
                    <p class="text-xs" x-text="lang === 'id' ? 'Foto asli belum diupload / masih placeholder.' : 'Original photo not uploaded / placeholder.'"></p>
                </div>
            </template>
            <div class="bg-white p-4 text-center border-t border-slate-100">
                <p class="font-medium text-ink" x-text="modalLabel"></p>
            </div>
        </div>
    </div>
</section>

<!-- ================= 7. SECTION FAQ ================= -->
<section id="faq" class="border-t border-sage/20 bg-white fade-in-up">
    <div class="mx-auto max-w-3xl px-6 py-20">
        <div class="max-w-xl">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand">FAQ</span>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink md:text-4xl">
                <span x-show="lang === 'id'">Pertanyaan yang sering ditanyakan</span>
                <span x-show="lang === 'en'" x-cloak>Frequently Asked Questions</span>
            </h2>
        </div>

        <div class="mt-10 divide-y divide-sage/20">
            <!-- FAQ 1 -->
            <div x-data="{ open: false }" class="py-5">
                <button @click="open = !open" class="flex w-full items-center justify-between gap-4 text-left">
                    <span class="font-medium text-ink">
                        <span x-show="lang === 'id'">Berapa lama waktu pengerjaan untuk sekali panggil?</span>
                        <span x-show="lang === 'en'" x-cloak>How long does a service session usually take?</span>
                    </span>
                    <svg :class="open ? 'rotate-180' : ''" class="h-5 w-5 shrink-0 text-brand transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="open" x-transition class="mt-3 pr-8 text-sm text-ink/70">
                    <span x-show="lang === 'id'">Tergantung ukuran & jenis layanan — bersih rumah standar biasanya 2-4 jam, deep cleaning atau garden bisa lebih lama. Estimasi pasti dikasih tim kami lewat WhatsApp sebelum jadwal fix.</span>
                    <span x-show="lang === 'en'" x-cloak>It depends on the property size and service type. Standard cleaning takes 2-4 hours, while deep cleaning or gardening might take longer. We will provide an estimate via WhatsApp before confirming.</span>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div x-data="{ open: false }" class="py-5">
                <button @click="open = !open" class="flex w-full items-center justify-between gap-4 text-left">
                    <span class="font-medium text-ink">
                        <span x-show="lang === 'id'">Apakah saya perlu menyediakan alat & bahan pembersih sendiri?</span>
                        <span x-show="lang === 'en'" x-cloak>Do I need to provide my own cleaning tools and supplies?</span>
                    </span>
                    <svg :class="open ? 'rotate-180' : ''" class="h-5 w-5 shrink-0 text-brand transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="open" x-transition class="mt-3 pr-8 text-sm text-ink/70">
                    <span x-show="lang === 'id'">Tidak perlu. Tim Indo Nyaman datang dengan peralatan dan bahan sendiri, kecuali ada permintaan khusus (misal produk tertentu) yang bisa didiskusikan dulu.</span>
                    <span x-show="lang === 'en'" x-cloak>No need. Our team brings their own professional tools and supplies, unless you have specific requests (e.g., using a specific product) which can be discussed beforehand.</span>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div x-data="{ open: false }" class="py-5">
                <button @click="open = !open" class="flex w-full items-center justify-between gap-4 text-left">
                    <span class="font-medium text-ink">
                        <span x-show="lang === 'id'">Bagaimana kalau saya mau reschedule atau batalin jadwal?</span>
                        <span x-show="lang === 'en'" x-cloak>What if I need to reschedule or cancel my booking?</span>
                    </span>
                    <svg :class="open ? 'rotate-180' : ''" class="h-5 w-5 shrink-0 text-brand transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="open" x-transition class="mt-3 pr-8 text-sm text-ink/70">
                    <span x-show="lang === 'id'">Tinggal chat WhatsApp minimal beberapa jam sebelum jadwal, tim kami bakal bantu cariin slot baru. Semakin cepat dikabarin, semakin gampang diatur ulang.</span>
                    <span x-show="lang === 'en'" x-cloak>Just chat with us on WhatsApp a few hours prior to the schedule. We will help find a new slot. The earlier you inform us, the easier it is to rearrange.</span>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div x-data="{ open: false }" class="py-5">
                <button @click="open = !open" class="flex w-full items-center justify-between gap-4 text-left">
                    <span class="font-medium text-ink">
                        <span x-show="lang === 'id'">Apakah ada kontrak jangka panjang buat langganan rutin?</span>
                        <span x-show="lang === 'en'" x-cloak>Are there any long-term contracts for routine subscriptions?</span>
                    </span>
                    <svg :class="open ? 'rotate-180' : ''" class="h-5 w-5 shrink-0 text-brand transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="open" x-transition class="mt-3 pr-8 text-sm text-ink/70">
                    <span x-show="lang === 'id'">Tidak ada kontrak mengikat. Paket rutin (mingguan/bulanan) bisa dihentikan atau diubah kapan saja, tinggal infokan lewat WhatsApp.</span>
                    <span x-show="lang === 'en'" x-cloak>No binding contracts. Routine packages (weekly/monthly) can be paused or modified at any time, just let us know via WhatsApp.</span>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div x-data="{ open: false }" class="py-5">
                <button @click="open = !open" class="flex w-full items-center justify-between gap-4 text-left">
                    <span class="font-medium text-ink">
                        <span x-show="lang === 'id'">Bagaimana cara pembayarannya?</span>
                        <span x-show="lang === 'en'" x-cloak>How does the payment process work?</span>
                    </span>
                    <svg :class="open ? 'rotate-180' : ''" class="h-5 w-5 shrink-0 text-brand transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="open" x-transition class="mt-3 pr-8 text-sm text-ink/70">
                    <span x-show="lang === 'id'">Pembayaran bisa cash atau transfer setelah pekerjaan selesai. Estimasi biaya selalu dikasih di depan lewat WhatsApp sebelum tim datang, jadi tidak ada kejutan harga.</span>
                    <span x-show="lang === 'en'" x-cloak>Payment can be made in cash or via bank transfer after the job is done. We always provide the cost estimate upfront via WhatsApp, so there are no surprise fees.</span>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div x-data="{ open: false }" class="py-5">
                <button @click="open = !open" class="flex w-full items-center justify-between gap-4 text-left">
                    <span class="font-medium text-ink">
                        <span x-show="lang === 'id'">Apakah area saya kecover layanan Indo Nyaman?</span>
                        <span x-show="lang === 'en'" x-cloak>Is my area covered by Indo Nyaman services?</span>
                    </span>
                    <svg :class="open ? 'rotate-180' : ''" class="h-5 w-5 shrink-0 text-brand transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div x-show="open" x-transition class="mt-3 pr-8 text-sm text-ink/70">
                    <span x-show="lang === 'id'">Saat ini kami melayani Denpasar, Ubud, Canggu, Sanur, dan Gianyar. Di luar area itu, tetap bisa tanya dulu lewat WhatsApp — kadang masih bisa diatur tergantung lokasi.</span>
                    <span x-show="lang === 'en'" x-cloak>Currently, we serve Denpasar, Ubud, Canggu, Sanur, and Gianyar. Outside these areas? Feel free to ask via WhatsApp — sometimes we can still accommodate depending on the location.</span>
                </div>
            </div>
        </div>

        <p class="mt-8 text-center text-sm text-ink/60">
            <span x-show="lang === 'id'">Masih ada pertanyaan lain?</span>
            <span x-show="lang === 'en'" x-cloak>Have more questions?</span>
            <a href="https://wa.me/{{ config('services.whatsapp.number') }}" target="_blank" class="font-semibold text-brand hover:underline">
                <span x-show="lang === 'id'">Chat kami langsung di WhatsApp</span>
                <span x-show="lang === 'en'" x-cloak>Chat directly with us on WhatsApp</span>
            </a>
        </p>
    </div>
</section>

<!-- ================= 8. SECTION PAKET ================= -->
<section id="paket" class="bg-cream fade-in-up">
    <div class="mx-auto max-w-6xl px-6 py-20">
        <div class="max-w-xl">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand" x-text="lang === 'id' ? 'Paket & Harga' : 'Pricing & Packages'"></span>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink md:text-4xl"
                x-text="lang === 'id' ? 'Pilih paket sesuai kebutuhan' : 'Choose a package that fits your needs'">
            </h2>
            <p class="mt-4 text-ink/70" x-text="lang === 'id' ? 'Harga final tetap dikonfirmasi lewat WhatsApp sesuai luas area & kondisi lapangan.' : 'Final pricing is confirmed via WhatsApp based on your property size & condition.'"></p>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @forelse ($pricingPackages as $package)
                <div class="relative rounded-2xl p-8 {{ $package->is_featured ? 'border-2 border-brand bg-white shadow-lg' : 'border border-sage/30 bg-white' }}">
                    @if ($package->is_featured)
                        <span class="absolute -top-3 left-8 rounded-full bg-brand px-3 py-1 text-xs font-semibold text-cream" x-text="lang === 'id' ? 'Paling Diminati' : 'Most Popular'"></span>
                    @endif

                    <h3 class="font-display text-xl font-semibold text-ink">{{ $package->name }}</h3>
                    <p class="mt-1 text-sm text-ink/60">{{ $package->description }}</p>
                    <p class="mt-6 font-display text-3xl font-semibold text-ink">
                        <span x-show="lang === 'id'">Mulai </span><span x-show="lang === 'en'" x-cloak>From </span>{{ $package->price_text }}@if ($package->price_suffix)<span class="text-base font-normal text-ink/60">{{ $package->price_suffix }}</span>@endif
                    </p>

                    <ul class="mt-6 space-y-3 text-sm text-ink/70">
                        @foreach ($package->feature_list as $feature)
                            <li class="flex gap-2"><span class="text-brand">✓</span> {{ $feature }}</li>
                        @endforeach
                    </ul>

                    <a href="https://wa.me/{{ config('services.whatsapp.number') }}?text={{ urlencode('Halo Indo Nyaman, saya mau tanya paket ' . $package->name) }}" target="_blank"
                       class="mt-8 block rounded-full px-6 py-3 text-center text-sm font-semibold transition {{ $package->is_featured ? 'bg-brand text-cream hover:bg-brand-dark' : 'border border-brand/30 text-brand-dark hover:bg-brand/10' }}"
                       x-text="lang === 'id' ? 'Tanya via WhatsApp' : 'Inquire via WhatsApp'">
                    </a>
                </div>
            @empty
              <div class="lg:col-span-3 rounded-2xl border border-dashed border-sage/40 bg-white p-10 text-center">
                  <p class="text-ink/60" x-text="lang === 'id' ? 'Paket harga belum tersedia saat ini.' : 'No pricing packages available right now.'"></p>
              </div>
          @endforelse
        </div>
    </div>
</section>

<!-- ================= 9. SECTION KONTAK & BOOKING ================= -->
<section id="kontak" class="border-t border-sage/20 bg-cream fade-in-up pb-24">
    <div class="mx-auto max-w-2xl px-6 py-20">
        <div class="max-w-xl">
            <span class="text-xs font-semibold uppercase tracking-wide text-brand" x-text="lang === 'id' ? 'Booking Cepat' : 'Quick Booking'"></span>
            <h2 class="mt-3 font-display text-3xl font-semibold text-ink md:text-4xl"
                x-text="lang === 'id' ? 'Isi form, kami follow-up via WhatsApp' : 'Fill the form, we follow up via WhatsApp'">
            </h2>
            <p class="mt-4 text-ink/70" x-text="lang === 'id' ? 'Tidak perlu buka WhatsApp dulu — isi data di bawah, nanti otomatis terbuka WA dengan pesan yang sudah lengkap.' : 'No need to open WhatsApp first — just fill your details below, and it will automatically launch WhatsApp with a pre-filled message.'"></p>
        </div>

       <form
            x-data="{
                nama: '',
                telepon: '',
                layanan: '',
                area: '',
                catatan: '',
                loading: false,
                formatPhone(phone) {
                    let cleaned = phone.replace(/[^0-9]/g, '');
                    if (cleaned.startsWith('0')) {
                        cleaned = '62' + cleaned.slice(1);
                    }
                    return cleaned;
                },
                async submitForm() {
                    if (this.loading) return;
                    this.loading = true;
                    const formattedPhone = this.formatPhone(this.telepon);

                    try {
                        await fetch('{{ route('booking.store') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({
                                name: this.nama,
                                phone: formattedPhone,
                                service_type: this.layanan,
                                area: this.area,
                                notes: this.catatan
                            })
                        });
                    } catch (error) {
                        console.error('Gagal menyimpan booking:', error);
                    }

                    // PERBAIKAN BUG: Gunakan lang langsung (tanpa 'this.') agar tidak bernilai undefined
                    const pesan = lang === 'id' 
                        ? `Halo Indo Nyaman, saya mau booking:\nNama: ${this.nama}\nNo. HP: ${formattedPhone}\nJenis Layanan: ${this.layanan}\nArea: ${this.area}` + (this.catatan ? `\nCatatan: ${this.catatan}` : '')
                        : `Hello Indo Nyaman, I would like to book:\nName: ${this.nama}\nPhone: ${formattedPhone}\nService Type: ${this.layanan}\nArea: ${this.area}` + (this.catatan ? `\nNotes: ${this.catatan}` : '');

                    window.open(`https://wa.me/{{ config('services.whatsapp.number') }}?text=${encodeURIComponent(pesan)}`, '_blank');
                    this.loading = false;
                }
            }"
            @submit.prevent="submitForm"
            class="mt-10 space-y-5 rounded-2xl border border-sage/30 bg-white p-6 md:p-8"
        >
            <div>
                <label class="text-sm font-medium text-ink" x-text="lang === 'id' ? 'Nama Lengkap' : 'Full Name'"></label>
                <input type="text" x-model="nama" required
                       class="mt-1.5 w-full rounded-lg border border-sage/40 px-4 py-2.5 text-sm text-ink focus:border-brand focus:outline-none focus:ring-1 focus:ring-brand">
            </div>

            <div>
                <label class="text-sm font-medium text-ink" x-text="lang === 'id' ? 'Nomor WhatsApp' : 'WhatsApp Number'"></label>
                <input type="tel" x-model="telepon" required minlength="9" pattern="[0-9+\-\s]+" placeholder="08xxxxxxxxxx"
       class="mt-1.5 w-full rounded-lg border border-sage/40 px-4 py-2.5 text-sm text-ink focus:border-brand focus:outline-none focus:ring-1 focus:ring-brand">
            </div>

            <div>
                <label class="text-sm font-medium text-ink" x-text="lang === 'id' ? 'Jenis Layanan' : 'Service Type'"></label>
                <select x-model="layanan" required
                        class="mt-1.5 w-full rounded-lg border border-sage/40 px-4 py-2.5 text-sm text-ink focus:border-brand focus:outline-none focus:ring-1 focus:ring-brand">
                    <option value="" disabled selected x-text="lang === 'id' ? 'Pilih jenis layanan' : 'Select service type'"></option>
                    <option value="Bersih Rumah/Apartemen" x-text="lang === 'id' ? 'Bersih Rumah/Apartemen' : 'Home/Apartment Cleaning'"></option>
                    <option value="Bersih Kos/Kontrakan" x-text="lang === 'id' ? 'Bersih Kos/Kontrakan' : 'Kos/Rental Cleaning'"></option>
                    <option value="Deep Cleaning">Deep Cleaning</option>
                    <option value="Perawatan Taman Rutin" x-text="lang === 'id' ? 'Perawatan Taman Rutin' : 'Routine Garden Maintenance'"></option>
                    <option value="Pembuatan Taman Baru" x-text="lang === 'id' ? 'Pembuatan Taman Baru' : 'New Garden Landscaping'"></option>
                    <option value="Lainnya" x-text="lang === 'id' ? 'Lainnya' : 'Other'"></option>
                </select>
            </div>

            <div>
                <label class="text-sm font-medium text-ink" x-text="lang === 'id' ? 'Area' : 'Location Area'"></label>
                <select x-model="area" required
                        class="mt-1.5 w-full rounded-lg border border-sage/40 px-4 py-2.5 text-sm text-ink focus:border-brand focus:outline-none focus:ring-1 focus:ring-brand">
                    <option value="" disabled selected x-text="lang === 'id' ? 'Pilih area' : 'Select area'"></option>
                    <option value="Denpasar">Denpasar</option>
                    <option value="Ubud">Ubud</option>
                    <option value="Canggu">Canggu</option>
                    <option value="Sanur">Sanur</option>
                    <option value="Gianyar">Gianyar</option>
                    <option value="Lainnya" x-text="lang === 'id' ? 'Lainnya' : 'Other'"></option>
                </select>
            </div>

            <div>
                <label class="text-sm font-medium text-ink" x-text="lang === 'id' ? 'Catatan Tambahan (opsional)' : 'Additional Notes (optional)'"></label>
                <textarea x-model="catatan" rows="3"
                          class="mt-1.5 w-full rounded-lg border border-sage/40 px-4 py-2.5 text-sm text-ink focus:border-brand focus:outline-none focus:ring-1 focus:ring-brand"></textarea>
            </div>

            <button type="submit" :disabled="loading"
                    class="w-full rounded-full bg-brand px-6 py-3 text-sm font-semibold text-cream transition hover:bg-brand-dark disabled:opacity-50"
                    x-text="lang === 'id' ? 'Kirim ke WhatsApp' : 'Send to WhatsApp'">
            </button>
        </form>
    </div>
</section> 

@endsection