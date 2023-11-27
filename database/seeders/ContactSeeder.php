<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contacts")->insert([
            "type" => "EMAIL",
            "url" => "mailto:maintainance@sigrax.com",
            "value" => "maintainance@sigrax.com"
        ]);

        DB::table("contacts")->insert([
            "type" => "WHATSAPP",
            "url" => "https://wa.me/628176884026",
            "value" => "628176884026"
        ]);

        DB::table("contacts")->insert([
            "type" => "INSTAGRAM",
            "url" => "https://www.instagram.com/sigraxcmms",
            "value" => "sigraxcmms"
        ]);
    }
}
