<?php

namespace Database\Seeders;

// use App\Models\JenisLayanan;
// use App\Models\RuangLayanan;
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enum\PermissionsEnum;
use App\Enum\RolesEnum;
use App\Models\Pasien;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
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

    // RuangLayanan::factory()
    //   ->count(6)
    //   ->sequence(
    //       ['nama' => 'Klinik Jantung', 'jenis_layanan_id' => 1],
    //       ['nama' => 'Klinik Syaraf', 'jenis_layanan_id' => 1],
    //       ['nama' => 'Klinik Paru', 'jenis_layanan_id' => 1],
    //       ['nama' => 'Klinik Anak', 'jenis_layanan_id' => 1],
    //       ['nama' => 'Farmasi 1', 'jenis_layanan_id' => 4],
    //   )
    //   ->create();
    
    // $adminRole = Role::create(['name' => RolesEnum::Admin->value]);
    // $dokterRole = Role::create(['name' => RolesEnum::Dokter->value]);
    // $apotekerRole = Role::create(['name' => RolesEnum::Apoteker->value]);
    // $admisiRole = Role::create(['name' => RolesEnum::Admisi->value]);
    // $perawatRole = Role::create(['name' => RolesEnum::Perawat->value]);

    // $manageUserPermission = Permission::create([
    //   'name' => PermissionsEnum::ManageUser->value,
    // ]);

    // $manageBridgingPermission = Permission::create([
    //   'name' => PermissionsEnum::ManageBridging->value,
    // ]);

    // $manageKunjunganPermission = Permission::create([
    //   'name' => PermissionsEnum::ManageKunjungan->value,
    // ]);

    // $manageLayananPermission = Permission::create([
    //   'name' => PermissionsEnum::ManageLayanan->value,
    // ]);

    // $manageRekamMedisPermission = Permission::create([
    //   'name' => PermissionsEnum::ManageRekamMedis->value,
    // ]);

    // $manageResepPermission = Permission::create([
    //   'name' => PermissionsEnum::ManageResep->value,
    // ]);

    // $dokterRole->syncPermissions([$manageRekamMedisPermission, $manageResepPermission]);
    // $perawatRole->syncPermissions([$manageRekamMedisPermission, $manageLayananPermission]);
    // $apotekerRole->syncPermissions([$manageResepPermission]);
    // $admisiRole->syncPermissions([$manageKunjunganPermission]);
    // $adminRole->syncPermissions([$manageUserPermission, $manageBridgingPermission]);

    // User::factory()->create([
    //   'name' => 'Budi Arif',
    //   'email' => 'dokter@example.com',
    // ])->assignRole(RolesEnum::Dokter);

    // User::factory()->create([
    //   'name' => 'Ida iyasa',
    //   'email' => 'perawat@example.com',
    // ])->assignRole(RolesEnum::Perawat);

    // User::factory()->create([
    //   'name' => 'Nur laili',
    //   'email' => 'apoteker@example.com',
    // ])->assignRole(RolesEnum::Apoteker);

    // User::factory()->create([
    //   'name' => 'Achmad Zubair',
    //   'email' => 'admin@example.com',
    // ])->assignRole(RolesEnum::Admin);

    // User::factory()->create([
    //   'name' => 'Fauzan',
    //   'email' => 'admisi@example.com',
    // ])->assignRole(RolesEnum::Admisi);


    Pasien::factory(25)->create();      
  }
}
