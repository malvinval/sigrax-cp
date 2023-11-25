<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("services")->insert([
            "title" => "Consulting",
            "desc" => "Description of consulting service",
            "slug" => "consulting"
        ]);

        DB::table("services")->insert([
            "title" => "Implementation",
            "desc" => "Description of implementation service",
            "slug" => "implementation"
        ]);

        DB::table("services")->insert([
            "title" => "Installation",
            "desc" => "Description of installation service",
            "slug" => "installation"
        ]);

        DB::table("services")->insert([
            "title" => "Training",
            "desc" => "Description of training service",
            "slug" => "training"
        ]);

        DB::table("services")->insert([
            "title" => "Support",
            "desc" => "Description of support service",
            "slug" => "support"
        ]);
    }
}
