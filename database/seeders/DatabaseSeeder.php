<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,              // Akun admin untuk CMS
            CompanyProfileSeeder::class,     // Data Company Profile
            AboutSeeder::class,              // Data About
        ]);
    }
}