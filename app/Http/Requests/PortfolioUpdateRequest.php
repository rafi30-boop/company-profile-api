<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PortfolioUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', Rule::unique('portfolios', 'slug')->ignore($this->route('portfolio')->id)],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'url'],
            'order' => ['nullable', 'integer'],
        ];
    }
}
