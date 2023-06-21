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
            'email' => 'iilbarcelona9@gmail.com',
            'username' => 'user',
            'password' => bcrypt('useruser'),
            'alamat' => 'ini alamat user',
            'duit' => '9999999'
        ]);

        User::create([
            'nama' => 'admin',
            'username' => 'admin',
            'email' => '2010817110008@mhs.ulm.ac.id',
            'password' => bcrypt('adminadmin'),
            'alamat' => 'ini alamat admin',
            'duit' => '9999999',
            'is_admin' => 'admin'
        ]);


        Kategori::create([
            'kategori' => 'Tidak Memiliki Kategori',
        ]);
        Kategori::create([
            'kategori' => 'Figurine',
        ]);
        Kategori::create([
            'kategori' => 'Clothing',
        ]);
        Kategori::create([
            'kategori' => 'Props',
        ]);
        Kategori::create([
            'kategori' => 'Accessories',
        ]);
        Kategori::create([
            'kategori' => 'Books',
        ]);

        $products = [
            // kategori_id: Figurine
            [
                'nama_product' => 'Nendoroid Sasuke Uchiha',
                'description' => 'Miniatur Sasuke Uchiha dengan berbagai ekspresi wajah dan aksesori.',
                'price' => 450000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Figuarts Zero Roronoa Zoro',
                'description' => 'Miniatur Roronoa Zoro dengan pose ikonik dan detail yang baik.',
                'price' => 550000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Nendoroid Hatsune Miku',
                'description' => 'Miniatur Hatsune Miku dengan aksesori musik dan pakaian yang dapat diganti.',
                'price' => 400000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Figuarts Zero Sanji',
                'description' => 'Miniatur Sanji dengan pose ikonik dan detail yang baik.',
                'price' => 500000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Nendoroid Eren Yeager',
                'description' => 'Miniatur Eren Yeager dengan berbagai ekspresi wajah dan aksesori.',
                'price' => 450000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Figuarts Zero Portgas D. Ace',
                'description' => 'Miniatur Portgas D. Ace dengan pose ikonik dan detail yang baik.',
                'price' => 550000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Nendoroid Megumin',
                'description' => 'Miniatur Megumin dengan aksesori sihir dan pose siap bertempur.',
                'price' => 400000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Figuarts Zero Trafalgar Law',
                'description' => 'Miniatur Trafalgar Law dengan pose ikonik dan detail yang baik.',
                'price' => 500000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Nendoroid Zero Two',
                'description' => 'Miniatur Zero Two dengan berbagai ekspresi wajah dan aksesori.',
                'price' => 450000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Figuarts Zero Sabo',
                'description' => 'Miniatur Sabo dengan pose ikonik dan detail yang baik.',
                'price' => 550000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Nendoroid Naruto Uzumaki',
                'description' => 'Miniatur Naruto Uzumaki dengan berbagai ekspresi wajah dan aksesori.',
                'price' => 400000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            [
                'nama_product' => 'Figuarts Zero Monkey D. Luffy',
                'description' => 'Miniatur Monkey D. Luffy dengan pose ikonik dan detail yang baik.',
                'price' => 500000,
                'jumlah_product' => 5,
                'kategori_id' => 2,
            ],
            // Lanjutkan dengan daftar produk lainnya...

            // kategori_id: Clothing
            [
                'nama_product' => 'Anime Print Hoodie',
                'description' => 'Hoodie dengan cetakan gambar karakter anime favorit.',
                'price' => 380000,
                'jumlah_product' => 10,
                'kategori_id' => 3,
            ],
            [
                'nama_product' => 'One Piece T-shirt',
                'description' => 'Kaos dengan desain One Piece yang keren.',
                'price' => 220000,
                'jumlah_product' => 10,
                'kategori_id' => 3,
            ],
            [
                'nama_product' => 'Attack on Titan Jacket',
                'description' => 'Jaket dengan logo Attack on Titan yang stylish.',
                'price' => 450000,
                'jumlah_product' => 10,
                'kategori_id' => 3,
            ],
            [
                'nama_product' => 'Anime Character Sweater',
                'description' => 'Sweater dengan gambar karakter anime yang unik.',
                'price' => 320000,
                'jumlah_product' => 10,
                'kategori_id' => 3,
            ],
            [
                'nama_product' => 'Naruto Jogger Pants',
                'description' => 'Celana jogger dengan motif Naruto yang nyaman untuk digunakan.',
                'price' => 280000,
                'jumlah_product' => 10,
                'kategori_id' => 3,
            ], [
                'nama_product' => 'Hoodie Attack on Titan',
                'description' => 'Hoodie dengan desain Attack on Titan yang nyaman.',
                'price' => 350000,
                'jumlah_product' => 10,
                'kategori_id' => 3,
            ],
            [
                'nama_product' => 'T-shirt My Hero Academia',
                'description' => 'Kaos dengan gambar karakter My Hero Academia.',
                'price' => 200000,
                'jumlah_product' => 10,
                'kategori_id' => 3,
            ],
            // Lanjutkan dengan daftar produk lainnya...

            // kategori_id: Props
            [
                'nama_product' => 'Dragon Ball Z Scouter',
                'description' => 'Replika Scouter dari Dragon Ball Z.',
                'price' => 200000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Harry Potter Wand',
                'description' => 'Replika tongkat sihir Harry Potter.',
                'price' => 250000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Marvel Avengers Shield',
                'description' => 'Replika perisai Captain America dari Marvel Avengers.',
                'price' => 300000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Assassin\'s Creed Hidden Blade',
                'description' => 'Replika Hidden Blade dari game Assassin\'s Creed.',
                'price' => 350000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Star Wars Lightsaber Stand',
                'description' => 'Stand untuk menyimpan lightsaber replika Star Wars.',
                'price' => 150000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Game of Thrones Iron Throne Replica',
                'description' => 'Replika Iron Throne dari serial Game of Thrones.',
                'price' => 500000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Legend of Zelda Triforce Necklace',
                'description' => 'Kalung Triforce dari game Legend of Zelda.',
                'price' => 120000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Doctor Who Sonic Screwdriver',
                'description' => 'Replika Sonic Screwdriver dari serial Doctor Who.',
                'price' => 280000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Death Note Replica',
                'description' => 'Replika buku Death Note.',
                'price' => 250000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            [
                'nama_product' => 'Lightsaber Replica',
                'description' => 'Replika lightsaber dari film Star Wars.',
                'price' => 500000,
                'jumlah_product' => 5,
                'kategori_id' => 4,
            ],
            // Lanjutkan dengan daftar produk lainnya...

            // kategori_id: Accessories
            [
                'nama_product' => 'One Piece Manga Vol. 1',
                'description' => 'Volume pertama dari manga One Piece karya Eiichiro Oda.',
                'price' => 80000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Attack on Titan Light Novel',
                'description' => 'Light novel Attack on Titan yang berisi cerita tambahan.',
                'price' => 100000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Harry Potter and the Sorcerer\'s Stone',
                'description' => 'Novel Harry Potter yang pertama dalam seri karya J.K. Rowling.',
                'price' => 120000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Naruto: The Official Character Data Book',
                'description' => 'Buku data resmi Naruto dengan informasi karakter dan ilustrasi.',
                'price' => 90000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'The Hobbit by J.R.R. Tolkien',
                'description' => 'Novel The Hobbit karya J.R.R. Tolkien.',
                'price' => 95000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Death Note Black Edition',
                'description' => 'Edisi spesial dari manga Death Note dengan tambahan konten.',
                'price' => 85000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Bleach Official Bootleg: KaraBuri+',
                'description' => 'Buku tambahan Bleach dengan ilustrasi, komik pendek, dan wawancara.',
                'price' => 75000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Tokyo Ghoul: Days Novel',
                'description' => 'Novel Tokyo Ghoul yang menceritakan kisah sampingan.',
                'price' => 95000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'The Lord of the Rings Trilogy',
                'description' => 'Trilogi novel The Lord of the Rings karya J.R.R. Tolkien.',
                'price' => 150000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Fullmetal Alchemist: The Art of Fullmetal Alchemist',
                'description' => 'Buku seni yang berisi ilustrasi dan konsep dari Fullmetal Alchemist.',
                'price' => 120000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'One Punch Man: Road to Hero',
                'description' => 'Manga One Punch Man yang menceritakan kisah awal Saitama.',
                'price' => 90000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'The Hunger Games Trilogy',
                'description' => 'Trilogi novel The Hunger Games karya Suzanne Collins.',
                'price' => 130000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Demon Slayer: Kimetsu no Yaiba - The Movie: Mugen Train Official Book',
                'description' => 'Buku resmi Demon Slayer: Kimetsu no Yaiba - The Movie: Mugen Train.',
                'price' => 95000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ], [
                'nama_product' => 'Anime Character Keychain Set',
                'description' => 'Set gantungan kunci dengan gambar karakter anime.',
                'price' => 80000,
                'jumlah_product' => 10,
                'kategori_id' => 5,
            ],
            [
                'nama_product' => 'Sailor Moon Necklace',
                'description' => 'Kalung dengan motif Sailor Moon yang elegan.',
                'price' => 120000,
                'jumlah_product' => 10,
                'kategori_id' => 5,
            ],
            [
                'nama_product' => 'Pokémon Earrings',
                'description' => 'Anting-anting dengan motif karakter Pokémon yang lucu.',
                'price' => 60000,
                'jumlah_product' => 10,
                'kategori_id' => 5,
            ],
            [
                'nama_product' => 'Anime Character Phone Case',
                'description' => 'Case HP dengan gambar karakter anime favorit.',
                'price' => 100000,
                'jumlah_product' => 10,
                'kategori_id' => 5,
            ], [
                'nama_product' => 'Anime Keychain Set',
                'description' => 'Set gantungan kunci dengan desain karakter anime.',
                'price' => 100000,
                'jumlah_product' => 10,
                'kategori_id' => 5,
            ],
            [
                'nama_product' => 'Sailor Moon Hair Accessories',
                'description' => 'Aksesori rambut dengan motif Sailor Moon.',
                'price' => 80000,
                'jumlah_product' => 10,
                'kategori_id' => 5,
            ],
            // Lanjutkan dengan daftar produk lainnya...

            // kategori_id: Books
            [
                'nama_product' => 'One Piece Manga Vol. 1',
                'description' => 'Volume pertama dari manga One Piece karya Eiichiro Oda.',
                'price' => 80000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Attack on Titan Light Novel',
                'description' => 'Light novel Attack on Titan yang berisi cerita tambahan.',
                'price' => 100000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Harry Potter and the Sorcerer\'s Stone',
                'description' => 'Novel Harry Potter yang pertama dalam seri karya J.K. Rowling.',
                'price' => 120000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Naruto: The Official Character Data Book',
                'description' => 'Buku data resmi Naruto dengan informasi karakter dan ilustrasi.',
                'price' => 90000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'The Hobbit by J.R.R. Tolkien',
                'description' => 'Novel The Hobbit karya J.R.R. Tolkien.',
                'price' => 95000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Death Note Black Edition',
                'description' => 'Edisi spesial dari manga Death Note dengan tambahan konten.',
                'price' => 85000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Bleach Official Bootleg: KaraBuri+',
                'description' => 'Buku tambahan Bleach dengan ilustrasi, komik pendek, dan wawancara.',
                'price' => 75000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Tokyo Ghoul: Days Novel',
                'description' => 'Novel Tokyo Ghoul yang menceritakan kisah sampingan.',
                'price' => 95000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'The Lord of the Rings Trilogy',
                'description' => 'Trilogi novel The Lord of the Rings karya J.R.R. Tolkien.',
                'price' => 150000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Fullmetal Alchemist: The Art of Fullmetal Alchemist',
                'description' => 'Buku seni yang berisi ilustrasi dan konsep dari Fullmetal Alchemist.',
                'price' => 120000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'One Punch Man: Road to Hero',
                'description' => 'Manga One Punch Man yang menceritakan kisah awal Saitama.',
                'price' => 90000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'The Hunger Games Trilogy',
                'description' => 'Trilogi novel The Hunger Games karya Suzanne Collins.',
                'price' => 130000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Demon Slayer: Kimetsu no Yaiba - The Movie: Mugen Train Official Book',
                'description' => 'Buku resmi Demon Slayer: Kimetsu no Yaiba - The Movie: Mugen Train.',
                'price' => 95000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ], [
                'nama_product' => 'Harry Potter and the Philosopher\'s Stone',
                'description' => 'Buku pertama dalam seri Harry Potter.',
                'price' => 150000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            [
                'nama_product' => 'Attack on Titan Manga Volume 1',
                'description' => 'Volume pertama manga Attack on Titan.',
                'price' => 100000,
                'jumlah_product' => 5,
                'kategori_id' => 6,
            ],
            // Lanjutkan dengan daftar produk lainnya...
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
