<?php

namespace App\Http\Resources\Api\Client;

use App\Models\Cities;
use App\Models\DonationRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DonationResource extends JsonResource
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
            'patient_name' => $this->patient_name,
            'hospital_name' => $this->hospital_name,
            'city_name' => $this->city->name,
            'blood_type_name' => $this->bloodType ? $this->bloodType->name : null,
            'details' => $this->details,
            'phone' => $this->patient_phone,
            'bloodType' => $this->whenLoaded('bloodType', $this->bloodType)
        ];
    }
}
