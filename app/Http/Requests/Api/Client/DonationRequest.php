<?php

namespace App\Http\Requests\Api\Client;

use App\Traits\ResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
{
    use ResponseTrait;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'patient_name'=>'required|string',
            'patient_age'=>'required|integer',
            'blood_type_id'=>'required|integer',
            'city_id'=>'required|integer',
            'hospital_name'=>'required|string',
            'hospital_address'=>'required|string',
            'details'=>'required|string',
            'bags_num'=>'required|integer',
            'patient_phone'=>'required|string',
            'latitude'=>'required|numeric|max:90|min:-90',
            'longitude'=>'required|numeric|max:180|min:-180',
            'governorate_id'=>'required|integer',

        ];
    }
}
