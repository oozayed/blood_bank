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
            'password' => $this->password,
            'date of birth' => $this->d_o_b,
            'blood type' => $this->bloodType->name,
            'city' => $this->city->name,
            'governorate' => $this->governorate->name,
            'last donation date' => $this->last_donation_date
        ];
    }
}
