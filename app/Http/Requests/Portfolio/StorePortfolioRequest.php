<?php

namespace App\Http\Requests\Portfolio;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:portfolios,slug',
            'client' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'thumbnail' => 'nullable|string|max:255',
            'project_url' => 'nullable|string|max:255',
            'completed_at' => 'nullable|date',
        ];
    }
}