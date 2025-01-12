<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kunjungan>
 */
class KunjunganFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    return [
      'no_kunjungan' => str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT),
      'tanggal_masuk' => now(),
      'id_pasien' => 1
    ];
  }
}
