<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::updateOrCreate(
            ['id' => 1],
            [
                'title' => 'Tentang Kami',
                'subtitle' => 'Perusahaan Teknologi Terkemuka',
                'description' => 'Kami adalah perusahaan teknologi terkemuka di Indonesia yang bergerak di bidang software development dan digital solutions.',
                'vision' => 'Menjadi perusahaan teknologi nomor 1 di Asia Tenggara.',
                'mission' => 'Menyediakan solusi teknologi terbaik untuk membantu bisnis berkembang.',
                'image' => 'https://example.com/about.jpg',
            ]
        );
    }
}