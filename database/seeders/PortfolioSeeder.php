<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'Company Profile Website',
                'slug' => 'company-profile-website',
                'client' => 'PT Company Indonesia',
                'description' => 'Website company profile modern dengan desain responsif.',
                'thumbnail' => 'https://example.com/portfolio-1.jpg',
                'project_url' => 'https://company.com',
                'completed_at' => '2025-12-01',
            ],
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'e-commerce-platform',
                'client' => 'PT Digital Commerce',
                'description' => 'Platform e-commerce lengkap dengan payment gateway.',
                'thumbnail' => 'https://example.com/portfolio-2.jpg',
                'project_url' => 'https://ecommerce.com',
                'completed_at' => '2026-01-15',
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}