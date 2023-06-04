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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('users_id'); // kolom foreign key dari tabel users
            $table->date('tanggal_pembelian');
            $table->string('status');
            $table->integer('total_harga');
            $table->timestamps();
        });

        //Menambahkan constraint pada foreign key
        // Schema::table('keranjang', function (Blueprint $table) {
        //     $table->foreign('user_id')->references('id')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjangs');
    }
};
