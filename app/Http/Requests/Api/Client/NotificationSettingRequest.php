<?php

namespace App\Http\Requests\Api\Client;

use App\Traits\ResponseTrait;
use Illuminate\Foundation\Http\FormRequest;

class NotificationSettingRequest extends FormRequest
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
     * Get the validation Rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'blood_type_ids' => 'nullable|array',
            'blood_type_ids.*' => 'exists:blood_types,id',
            'governorates_ids' => 'nullable|array',
            'governorates_ids.*' => 'exists:governorates,id',
        ];
    }
}
