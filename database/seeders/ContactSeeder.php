<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        ContactMessage::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '08123456789',
            'subject' => 'Info Layanan',
            'message' => 'Saya tertarik dengan layanan Web Development. Mohon info lebih lanjut.',
            'is_read' => false,
        ]);
    }
}