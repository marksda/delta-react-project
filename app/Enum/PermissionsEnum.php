<?php

namespace App\Enum;

enum PermissionsEnum : string
{
  case ManageUser = 'manage_user';
  case ManageBridging = 'manage_bridging';
  case ManageKunjungan = 'manage_kunjungan';
  case ManageLayanan = 'manage_layanan';
  case ManageRekamMedis = 'manage_rekam_medis';
  case ManageResep = 'manage_resep';
}