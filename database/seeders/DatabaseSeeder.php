<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact; // Import the Contact model

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed the contacts table with sample data
        Contact::factory(200)->create();
    }
}
