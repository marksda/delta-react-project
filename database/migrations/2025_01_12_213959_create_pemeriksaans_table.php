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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('layanan_id')->constrained('layanans');
            $table->date('tgl_pemeriksaan');
            $table->float('tinggi_badan');
            $table->float('berat_badan');
            $table->float('sistole');
            $table->float('diastole');
            $table->float('tinggi_badan');
            $table->float('berat_badan');
            $table->float('heart_rate');
            $table->float('respiration_rate');
            $table->float('suhu_tubuh');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('saturasi');
            $table->float('tinggi_badan');
            $table->string('berkas_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};
