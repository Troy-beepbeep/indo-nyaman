<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    public function run(): void
    {
        Testimonial::insert([
            [
                'name' => 'Ni Wayan S.',
                'role' => 'Pemilik kos, Denpasar',
                'quote' => 'Rumah jadi kinclong tiap abis dibersihin, timnya juga sopan dan on-time banget. Udah langganan 3 bulan gak pernah kecewa.',
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Agus R.',
                'role' => 'Pemilik rumah, Ubud',
                'quote' => 'Taman rumah gue udah setahun gak keurus, dipanggil Indo Nyaman langsung rapi total. Sekarang pake paket rutin bulanan.',
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Linda K.',
                'role' => 'Villa owner, Canggu',
                'quote' => 'Booking-nya gampang banget cuma via WhatsApp, estimasi harga juga jelas dari awal, gak ada biaya tambahan dadakan.',
                'rating' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}