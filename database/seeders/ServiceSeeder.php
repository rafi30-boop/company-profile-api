<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'slug' => 'web-development',
                'short_description' => 'Pembuatan website profesional',
                'description' => 'Kami menyediakan layanan pembuatan website profesional dengan teknologi terbaru.',
                'icon' => 'fa-code',
                'image' => 'https://example.com/web-development.jpg',
            ],
            [
                'title' => 'Mobile Development',
                'slug' => 'mobile-development',
                'short_description' => 'Aplikasi mobile Android & iOS',
                'description' => 'Kami mengembangkan aplikasi mobile untuk Android dan iOS dengan performa tinggi.',
                'icon' => 'fa-mobile-alt',
                'image' => 'https://example.com/mobile-development.jpg',
            ],
        ];

        foreach ($services as $service) {
            // Pakai updateOrCreate biar tidak duplikat
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}