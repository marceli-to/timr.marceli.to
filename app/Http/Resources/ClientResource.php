<?php
namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  { 
    return [
      'id' => $this->id,
      'name' => $this->name,
      'acronym' => $this->acronym,
      'byline' => $this->byline,
      'street' => $this->street,
      'zip' => $this->zip,
      'city' => $this->city,
    ];
  }
}
