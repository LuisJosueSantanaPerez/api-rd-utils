<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProvinceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'code' => $this->code,
            'name' => $this->name,
            'country' => [
                'id' => $this->country_id,
                'iso_code'   => $this->country->iso_code,
                'name'   => $this->country->name,
            ],
        ];
    }
}