<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangLayanan extends Model
{
    /** @use HasFactory<\Database\Factories\RuangLayananFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'jenis_layanan_id'
    ];
}
