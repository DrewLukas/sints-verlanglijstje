<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'cadeau' => $this->cadeau,
            'beschrijving' => $this->beschrijving,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
