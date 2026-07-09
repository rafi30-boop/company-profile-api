<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $blogs = [
            [
                'category_id' => 1,
                'title' => 'Getting Started with Laravel',
                'slug' => 'getting-started-with-laravel',
                'thumbnail' => 'https://example.com/blog-1.jpg',
                'content' => '<p>Laravel is a powerful PHP framework...</p>',
                'author' => 'Admin',
                'published_at' => now(),
                'status' => 'published',
            ],
            [
                'category_id' => 4,
                'title' => 'Modern Frontend Development',
                'slug' => 'modern-frontend-development',
                'thumbnail' => 'https://example.com/blog-2.jpg',
                'content' => '<p>Frontend development has evolved...</p>',
                'author' => 'Admin',
                'published_at' => now(),
                'status' => 'published',
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::create($blog);
        }
    }
}