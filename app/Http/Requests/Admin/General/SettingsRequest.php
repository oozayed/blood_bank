<?php

namespace App\Http\Requests\Admin\General;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
{
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
            "site_name" => "required|string|min:3",
            "email" => "required|email",
            "phone" => "required|string|min:9",
            "about_us" => "required|string",
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'youtube' => 'required|url',
            'instagram' => 'required|url',
        ];
    }
}
