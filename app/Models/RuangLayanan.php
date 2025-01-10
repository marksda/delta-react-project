<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RuangLayanan extends Model
{
    /** @use HasFactory<\Database\Factories\RuangLayananFactory> */
    use HasFactory;

    protected $fillable = [
      'nama',
      'jenis_layanan_id'
    ];

    public function jenis_layanan(): BelongsTo
    {
      return $this->belongsTo(JenisLayanan::class, 'jenis_layanan_id', 'id');
    }
}
