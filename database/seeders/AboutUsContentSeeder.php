<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutUsContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("about_us")->insert([
            "section" => "1",
            "subsection" => "1.2.1",
            "content" => "Why choose us",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("about_us")->insert([
            "section" => "1",
            "subsection" => "1.2.2",
            "content" => "Make your customers happy by giving services.",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("about_us")->insert([
            "section" => "1",
            "subsection" => "1.2.3",
            "content" => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("about_us")->insert([
            "section" => "1",
            "subsection" => "1.2.4",
            "content" => "A domain name is one of the first steps to establishing your brand. Secure a consistent brand image with a domain name that matches your business.",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("about_us")->insert([
            "section" => "1",
            "subsection" => "1.2.5",
            "content" => "Get started",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("about_us")->insert([
            "section" => "2",
            "subsection" => "2.1.1",
            "content" => "The Greatest Journey Of Online Payment.",
            "created_at" => now(),
            "updated_at" => now()
        ]);

        DB::table("about_us")->insert([
            "section" => "2",
            "subsection" => "2.2.1",
            "content" => "With TailGrids, business and students thrive together. Business can perfectly match their staffing to changing demand throughout the dayed.",
            "created_at" => now(),
            "updated_at" => now()
        ]);
    }
}
