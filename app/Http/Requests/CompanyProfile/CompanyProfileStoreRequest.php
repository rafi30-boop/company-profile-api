<?php

namespace App\Http\Requests\CompanyProfile;

use Illuminate\Foundation\Http\FormRequest;

class CompanyProfileStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:company_profiles,slug'],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'url'],
            'order' => ['nullable', 'integer'],
        ];
    }
}
