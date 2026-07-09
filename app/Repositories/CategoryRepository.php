<?php

namespace App\Repositories;

use App\Interfaces\CategoryRepositoryInterface;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function all(): Collection
    {
        return BlogCategory::all();
    }

    public function find(int $id): ?BlogCategory
    {
        return BlogCategory::find($id);
    }

    public function create(array $data): BlogCategory
    {
        return BlogCategory::create($data);
    }

    public function update(BlogCategory $category, array $data): BlogCategory
    {
        $category->update($data);
        return $category;
    }

    public function delete(BlogCategory $category): bool
    {
        return $category->delete();
    }
}