<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('adminadmin'),
            'alamat' => 'ini alamat admin',
            'duit' => '9999999'
        ]);

        User::create([
            'nama' => 'admin2',
            'username' => 'admin2',
            'password' => bcrypt('adminadmin'),
            'alamat' => 'ini alamat admin',
            'duit' => '9999999',
            'is_admin' => 'admin'
        ]);

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
