<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'vision' => 'nullable|string',
            'mission' => 'nullable|string',
            'image' => 'nullable|string|max:255',
        ];
    }
}