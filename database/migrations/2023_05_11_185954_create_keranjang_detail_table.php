<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('keranjang_details', function (Blueprint $table) {
            $table->id()->unique(); 
            $table->unsignedBigInteger('product_id'); // kolom foreign key dari tabel product
            $table->unsignedBigInteger('keranjangs_id'); // kolom foreign key dari tabel keranjang
            $table->integer('jumlah_pesanan');
            $table->integer('jumlah_harga');
            $table->timestamps();
        });

        //Menambahkan constraint pada foreign key
        // Schema::table('keranjang_detail', function (Blueprint $table) {
        //     $table->foreign('product_id')->references('id')->on('product');
        // });

        //Menambahkan constraint pada foreign key
        // Schema::table('keranjang_detail', function (Blueprint $table) {
        //     $table->foreign('keranjang_id')->references('id')->on('keranjang');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang_details');
    }
};
