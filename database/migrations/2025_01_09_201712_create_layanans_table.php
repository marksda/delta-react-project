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
        Schema::create('layanans', function (Blueprint $table) {
            $table->id();
            $table->string('no_layanan')->unique();
            $table->foreignId('id_jenis_layanan')->constrained('jenis_layanans');
            $table->foreignId('id_ruang_layanan')->constrained('ruang_layanans');
            $table->timestamp('tanggal_mulai');
            $table->timestamp('tanggal_selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanans');
    }
};
