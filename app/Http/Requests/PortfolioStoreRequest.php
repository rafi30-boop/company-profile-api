<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:portfolios,slug'],
            'description' => ['nullable', 'string'],
            'image_url' => ['nullable', 'url'],
            'order' => ['nullable', 'integer'],
        ];
    }
}
