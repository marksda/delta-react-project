<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kunjungan extends Model
{
  /** @use HasFactory<\Database\Factories\KunjunganFactory> */
  use HasFactory;

  // public $timestamps = false;

  protected $fillable = [
    'no_kunjungan',
    'id_pasien',
    'tanggal_masuk',
    'tanggal_keluar'
  ];

  public function layanans(): HasMany
  {
    return $this->hasMany(Layanan::class, 'kunjungan_id', 'id');
  }

  public function pasien(): BelongsTo
  {
    return $this->belongsTo(Pasien::class, 'id_pasien', 'id');
  }    
}
