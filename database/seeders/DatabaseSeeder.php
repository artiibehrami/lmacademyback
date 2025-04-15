<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        public function run()
{
    $this->call(ScoreboardTableSeeder::class);
}

        // Call other seeders or use factories directly here

        // Example: Seeding users using the factory
        User::factory(10)->create();  // This will create 10 users

        // Or if you're calling another specific seeder
        // $this->call(UserSeeder::class);
    }
}
