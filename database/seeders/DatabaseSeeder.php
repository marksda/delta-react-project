<?php

namespace Database\Seeders;

use App\Models\JenisLayanan;
use App\Models\RuangLayanan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // JenisLayanan::factory()
        //                 ->count(6)
        //                 ->sequence(
        //                     ['nama' => 'Rawat Jalan'],
        //                     ['nama' => 'IGD'],
        //                     ['nama' => 'Rawat Inap'],
        //                     ['nama' => 'Farmasi'],
        //                     ['nama' => 'Radiologi'],
        //                     ['nama' => 'Laborat']
        //                 )
        //                 ->create();

        RuangLayanan::factory()
            ->count(6)
            ->sequence(
                ['nama' => 'Klinik Jantung', 'jenis_layanan_id' => 1],
                ['nama' => 'Klinik Syaraf', 'jenis_layanan_id' => 1],
                ['nama' => 'Klinik Paru', 'jenis_layanan_id' => 1],
                ['nama' => 'Klinik Anak', 'jenis_layanan_id' => 1],
                ['nama' => 'Farmasi 1', 'jenis_layanan_id' => 4],
            )
            ->create();
    }
}
