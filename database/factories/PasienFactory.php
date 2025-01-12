<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\pasien>
 */
class PasienFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    $gender = fake()->randomElement(['male', 'female']);
    return [
      'nama' => fake()->name($gender),
      'no_rm' => str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT),
      'tgl_lahir' => date('Y-m-d', mt_rand(strtotime('1965-01-01'), strtotime('2025-01-12'))),
      'gender' => $gender
    ];
  }
}
