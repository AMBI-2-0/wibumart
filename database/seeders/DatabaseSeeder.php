<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
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
            'nama' => 'user',
            'username' => 'user',
            'password' => bcrypt('useruser'),
            'alamat' => 'ini alamat user',
            'duit' => '9999999'
        ]);

        User::create([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('adminadmin'),
            'alamat' => 'ini alamat admin',
            'duit' => '9999999',
            'is_admin' => 'admin'
        ]);

        
        Kategori::create([
            'kategori'=>'Tidak Memiliki Kategori',
        ]);
        Kategori::create([
            'kategori'=>'Figurine',
        ]);
        Kategori::create([
            'kategori'=>'Clothing',
        ]); 
        Kategori::create([
            'kategori'=>'Props',
        ]);
        Kategori::create([
            'kategori'=>'Accessories',
        ]);
        Kategori::create([
            'kategori'=>'Books',
        ]);

    }
}
