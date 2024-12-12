<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'street' => $this->street,
            'district' => $this->district,
            'street_number' => $this->street_number,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code
        ];
    }
}
