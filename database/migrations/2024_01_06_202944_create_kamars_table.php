<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\PrettyPrinter\Standard;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kamar');
            $table->string('foto');
            $table->string('jumlah_kamar');
            $table->string('harga_kamar');
            $table->string('deskripsi_kamar');
            $table->enum('tipe_kamar', ['deluxe', 'superior', 'signature', 'standard']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamars');
    }
};
