<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Layanan extends Model
{
  /** @use HasFactory<\Database\Factories\LayananFactory> */
  use HasFactory;

  // public $timestamps = false;

  protected $fillable = [
    'kunjungan_id',
    'no_layanan',
    'id_jenis_layanan',
    'id_ruang_layanan',
    'tanggal_mulai',
    'tanggal_selesai'
  ];

  public function kunjungan(): BelongsTo
  {
    return $this->belongsTo(Kunjungan::class, 'kunjungan_id', 'id');
  }

  public function jenis_layanan(): BelongsTo
  {
    return $this->belongsTo(JenisLayanan::class, 'id_jenis_layanan', 'id');
  }

  public function ruang_layanan(): BelongsTo
  {
    return $this->belongsTo(JenisLayanan::class, 'id_jenis_layanan', 'id');
  }
  
}
