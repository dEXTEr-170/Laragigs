<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();

        // Create a specific user
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
        ]);

        // Create listings for the specific user
        Listing::factory(count: 10)->create([
            'user_id' => $user->id,
        ]);

        // Listing::create([
        //     'title' => 'Senior Laravel Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'info@acmecorp.com',
        //     'website' => 'https://www.acmecorp.com',
        //     'description' => 'We are looking for a Senior Laravel Developer to join our team.',
        // ]);

        // Listing::create([
        //     'title' => 'Junior Frontend Developer',
        //     'tags' => 'html, css, javascript',
        //     'company' => 'Tech Solutions',
        //     'location' => 'Remote',
        //     'email' => 'info@techsolutions.com',
        //     'website' => 'https://www.techsolutions.com',
        //     'description' => 'Join our team as a Junior Frontend Developer and work on exciting projects.',
        // ]);
    }
}
