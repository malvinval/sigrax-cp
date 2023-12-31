<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BlogSeeder::class,
            UserSeeder::class,
            ContactSeeder::class,
            AboutUsContentSeeder::class,
            ServiceSeeder::class,
            HomeSeeder::class,
            ProductSeeder::class,
            FeatureSeeder::class
        ]);
    }
}
