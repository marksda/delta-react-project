<?php

namespace App\Enum;

enum RolesEnum : string
{
  case Admin = 'admin';
  case Dokter = 'dokter';
  case Apoteker = 'apoteker';
  case Admisi = 'admisi';
  case Perawat = 'perawat';

  public static function labels(): array
  {
      return [
        self::Admin->value => 'Admin',
        self::Dokter->value => 'Dokter',
        self::Apoteker->value => 'Apoteker',
        self::Admisi->value => 'Admisi',
        self::Perawat->value => 'Perawat',
      ];
  }

  public function label()
  {
    return match($this) {
      self::Admin->value => 'Admin',
      self::Dokter->value => 'Dokter',
      self::Apoteker->value => 'Apoteker',
      self::Admisi->value => 'Admisi',
      self::Perawat->value => 'Perawat',
    };
  }
}
