<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
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
            'title' => ['required', 'string' ,'min:5', 'max:100'],
            'content' => ['required', 'string', 'min:10'],
            'image' => ['nullable', 'image', 'mimes:jpeg,jpg,png,gif', 'max:2048'],
            'category_id' => ['required', 'exists:categories,id'],
        ];
    }
}
