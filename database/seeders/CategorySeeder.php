<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Technology', 'slug' => 'technology'],
            ['name' => 'Business', 'slug' => 'business'],
            ['name' => 'Design', 'slug' => 'design'],
            ['name' => 'Development', 'slug' => 'development'],
        ];

        foreach ($categories as $category) {
            BlogCategory::create($category);
        }
    }
}