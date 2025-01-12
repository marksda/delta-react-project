<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LayananResource extends JsonResource
{
  public static $wrap = false;

  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    $kunjungan = $this->kunjungan;
    $pasien = $kunjungan->pasien;
    $jenis_layanan = $this->jenis_layanan;
    $ruang_layanan = $this->ruang_layanan;

    return [
      'id' => $this->id,
      'no_layanan' => $this->no_layanan,
      'kunjungan' => [
        'id' => $kunjungan->id,
        'no_kunjungan' => $kunjungan->no_kunjungan,
        'tanggal_masuk' => [
          "value" => $kunjungan->tanggal_masuk,
          "formatted" => (new Carbon($kunjungan->tanggal_masuk))->format('d-m-Y')
        ],
        'tanggal_keluar' => [
          "value" => $kunjungan->tanggal_keluar,
          "formatted" => $kunjungan->tanggal_keluar == null ? null : (new Carbon($kunjungan->tanggal_keluar))->format('d-m-Y')
        ],
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
      ],  
      'tanggal_mulai' => [
        "value" => $this->tanggal_mulai,
        "formatted" => (new Carbon($this->tanggal_mulai))->format('d-m-Y')
      ] ,
      'jenis_layanan' => [
        'id' => $jenis_layanan->id,
        'nama' => $jenis_layanan->nama, 
      ],
      'ruang_layanan' => [
        'id' => $ruang_layanan->id,
        'nama' => $ruang_layanan->nama, 
      ]
    ];
  }
}
