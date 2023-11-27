<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("homes")->insert([
            "section" => "1",
            "subsection" => "1.2.1",
            "content" => "SIGRAX CMMS",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("homes")->insert([
            "section" => "1",
            "subsection" => "1.2.2",
            "content" => "We are a dedicated team of seasoned professionals, well-versed in our field and deeply connected to our local context. Our strength lies in our unwavering commitment to being a reliable partner for our customers.",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("homes")->insert([
            "section" => "1",
            "subsection" => "1.2.3",
            "content" => "Starting as a service provider, we have always prioritized understanding our customers' unique needs. Our goal is simple: to provide the most suitable solutions to help them achieve their objectives. Our track record speaks for itself, as we consistently deliver results and exceed expectations.",
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
