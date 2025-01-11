<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JenisLayananResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @return array<string, mixed>
   */
  public function toArray(Request $request): array
  {
    // return parent::toArray($request);
    return [
      'id' => $this->id,
      'nama' => $this->nama,          
      'created_date' => [
        "value" => $this->created_at,
        "formatted" => (new Carbon($this->created_at))->format('d-m-Y')
      ]
    ];
  }
}
