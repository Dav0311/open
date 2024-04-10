<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Document::create([
            'file_name' => 'Test Document',
            'file_path' => 'documents/test-document.pdf',
            'course' => 'Computer Science',
        ]);
    }
}
