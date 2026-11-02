<?php

namespace Database\Seeders;

use App\Models\User;
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
        // Seed test user if none exists
        if (\App\Models\User::count() === 0) {
            \App\Models\User::factory()->create([
                'name' => 'Admin WEB TARA',
                'email' => 'admin@webtara.id',
            ]);
        }

        $this->call([
            ServiceSeeder::class,
            PricingPlanSeeder::class,
            AdvantageSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
