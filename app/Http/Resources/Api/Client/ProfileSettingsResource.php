<?php

namespace App\Http\Resources\Api\Client;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileSettingsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->d_o_b,
            'blood_type_id' => $this->bloodType->id,
            'blood_type' => $this->bloodType->name,
            'city_id' => $this->city->id,
            'city' => $this->city->name,
            'governorate_id' => $this->governorate->id,
            'governorate' => $this->governorate->name,
            'last_donation_date' => $this->last_donation_date
        ];
    }
}
