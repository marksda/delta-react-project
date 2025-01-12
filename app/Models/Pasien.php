<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
  /** @use HasFactory<\Database\Factories\PasienFactory> */
  use HasFactory;

  /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
  protected $fillable = [
      'nama',
      'no_rm',
      'tgl_lahir',
      'gender'
  ];
   
}
