<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyProfileUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('company_profiles', 'slug')->ignore($this->route('company_profile')->id)],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'url'],
            'order' => ['nullable', 'integer'],
        ];
    }
}
