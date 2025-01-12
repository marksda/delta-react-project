<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PasienResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    return [
      'id' => $this->id,
      'no_rm' => $this->id,
      'nama' => $this->nama,   
      'gender' => $this->gender,
      'tgl_lahir' => [
        "value" => $this->tgl_lahir,
        "formatted" => (new Carbon($this->tgl_lahir))->format('d-m-Y')
      ]
    ];
  }
}
