<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisLayanan extends Model
{
    /** @use HasFactory<\Database\Factories\JenisLayananFactory> */
    use HasFactory;

    protected $fillable = ['nama'];

    public function ruang_layanans(): HasMany
    {
        return $this->hasMany(RuangLayanan::class, 'jenis_layanan_id', 'id');
    }

}