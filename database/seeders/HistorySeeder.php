<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\History;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Tambahkan contoh data
        History::create([
            'image' => 'images\bailu.jpeg',
            'product_name' => 'Nama Produk',
            'price' => 100.00,
            'ordered_at' => now(),
            'status' => 'berlangsung',
        ]);

        History::create([
            'image' => 'images\raidens.png',
            'product_name' => 'Nama Produk',
            'price' => 100.00,
            'ordered_at' => now(),
            'status' => 'dibatalkan',
        ]);

        History::create([
            'image' => 'images\bailu.jpeg',
            'product_name' => 'Nama Produk',
            'price' => 100.00,
            'ordered_at' => now(),
            'status' => 'selesai',
        ]);

        // Tambahkan data lainnya jika diperlukan

        // Selesai menambahkan data
        $this->command->info('sudah cuy.');
    }
}
