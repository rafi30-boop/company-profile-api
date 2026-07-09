<?php

namespace App\Repositories;

use App\Interfaces\BlogRepositoryInterface;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Collection;

class BlogRepository implements BlogRepositoryInterface
{
    public function all(): Collection
    {
        return Blog::with('category')->orderBy('published_at', 'desc')->get();
    }

    public function findBySlug(string $slug): ?Blog
    {
        return Blog::with('category')->where('slug', $slug)->first();
    }

    public function find(int $id): ?Blog
    {
        return Blog::with('category')->find($id);
    }

    public function create(array $data): Blog
    {
        return Blog::create($data);
    }

    public function update(Blog $blog, array $data): Blog
    {
        $blog->update($data);
        return $blog;
    }

    public function delete(Blog $blog): bool
    {
        return $blog->delete();
    }
}