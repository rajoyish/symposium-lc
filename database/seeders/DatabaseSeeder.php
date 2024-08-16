<?php

namespace Database\Seeders;

use App\Models\Conference;
use App\Models\Talk;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()
            ->has(Talk::factory()->count(5))
            ->create([
                'name' => 'Rajesh Budhathoki',
                'email' => 'rajesh@huesarrays.com',
            ]);
        Conference::factory()->count(5)->create();
    }
}
