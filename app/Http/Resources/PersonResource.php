<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
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
         "id" => $this->id,
         "username" => $this->username,
         "email" => $this->email,
         "country" => $this->country,
         "created_at" => $this->created_at,
         "updated_at" => $this->updated_at,
      ];
   }
}
