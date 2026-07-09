<?php

namespace App\Interfaces;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?BlogCategory;
    public function create(array $data): BlogCategory;
    public function update(BlogCategory $category, array $data): BlogCategory;
    public function delete(BlogCategory $category): bool;
}