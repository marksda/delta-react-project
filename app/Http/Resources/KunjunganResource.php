<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KunjunganResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    $pasien = $this->pasien;

    return [
      'id' => $this->id,
      'no_kunjungan' => $this->no_kunjungan,
      'pasien' => [
        'id' => $pasien->id,
        'no_rm' => $pasien->no_rm,
        'nama' => $pasien->nama,
        'gender' => $pasien->gender,
        'tgl_lahir' => [
          "value" => $pasien->tgl_lahir,
          "formatted" => (new Carbon($pasien->tgl_lahir))->format('d-m-Y')
        ]
      ],   
      'tanggal_masuk' => [
        "value" => $this->tanggal_masuk,
        "formatted" => (new Carbon($this->tanggal_masuk))->format('d-m-Y')
      ],
      'tanggal_keluar' => [
        "value" => $this->tanggal_keluar,
        "formatted" => (new Carbon($this->tanggal_keluar))->format('d-m-Y')
      ]
    ];
  }
}
