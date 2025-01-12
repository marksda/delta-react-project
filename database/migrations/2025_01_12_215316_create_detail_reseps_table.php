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
        Schema::create('detail_reseps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resep_id')->constrained('reseps');
            $table->string('id_obat');
            $table->string('nama_obat');
            $table->string('jumlah_obat');
            $table->string('signa_obat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_reseps');
    }
};
