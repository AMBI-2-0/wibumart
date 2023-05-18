<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        $categories = ['figures', 'clothings', 'props', 'accessories', 'books'];

        for ($i = 0; $i < 30; $i++) {
            Product::create([
                'nama_product' => $faker->name,
                'description' => $faker->text,
                'price' => $faker->randomNumber(8),
                'jumlah_product' => $faker->randomNumber(2),
                'kategori_product'=>$faker->randomElement($categories)
            ]);
        }
    }
}