<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use Illuminate\Database\Seeder;

class GalleryItemSeeder extends Seeder
{
    public function run(): void
    {
        GalleryItem::insert([
            ['label' => 'Deep Cleaning Rumah', 'tag' => 'Cleaning', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Bersih Kos 2 Lantai', 'tag' => 'Cleaning', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Perawatan Taman Villa', 'tag' => 'Garden', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Pembuatan Taman Baru', 'tag' => 'Garden', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Bersih Pasca Renovasi', 'tag' => 'Cleaning', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['label' => 'Pangkas Pohon & Semak', 'tag' => 'Garden', 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}