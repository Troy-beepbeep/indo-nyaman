<?php

namespace Database\Seeders;

use App\Models\PricingPackage;
use Illuminate\Database\Seeder;

class PricingPackageSeeder extends Seeder
{
    public function run(): void
    {
        PricingPackage::insert([
            [
                'name' => 'Sekali Panggil',
                'description' => 'Cocok buat kebutuhan mendadak atau coba-coba dulu.',
                'price_text' => '150rb',
                'price_suffix' => null,
                'features' => "Cleaning atau garden, pilih salah satu\nEstimasi biaya jelas di depan\nJadwal fleksibel sesuai ketersediaan tim",
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mingguan',
                'description' => 'Buat rumah/kos yang butuh perawatan rutin tiap minggu.',
                'price_text' => '500rb',
                'price_suffix' => '/bulan',
                'features' => "Kunjungan rutin tiap minggu\nCleaning & garden bisa digabung\nPrioritas jadwal dibanding sekali panggil\nBisa reschedule tanpa biaya tambahan",
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bulanan',
                'description' => 'Buat villa/rumah besar yang mau perawatan menyeluruh.',
                'price_text' => '1,2jt',
                'price_suffix' => '/bulan',
                'features' => "Kunjungan terjadwal beberapa kali sebulan\nCleaning & garden penuh, termasuk deep cleaning berkala\nLaporan kondisi tiap kunjungan\nHarga khusus dibanding paket mingguan",
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}