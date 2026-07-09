<?php

namespace Database\Seeders;

use App\Models\CompanyProfile;
use Illuminate\Database\Seeder;

class CompanyProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyProfile::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'PT Company Indonesia',
                'slug' => 'pt-company-indonesia',
                'description' => 'Perusahaan teknologi terkemuka di Indonesia yang bergerak di bidang software development, digital solutions, dan konsultasi IT.',
                'image_url' => 'https://example.com/logo.png',
                'order' => 1,
            ]
        );
    }
}