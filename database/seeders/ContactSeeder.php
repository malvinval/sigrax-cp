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
            "url" => "mailto:maintainance@sigrax.com?Subject=Halo,%20Sigrax!",
            "slug" => "email"
        ]);

        DB::table("contacts")->insert([
            "type" => "WHATSAPP",
            "url" => "https://wa.me/628176884026",
            "slug" => "whatsapp"
        ]);

        DB::table("contacts")->insert([
            "type" => "INSTAGRAM",
            "url" => "https://www.instagram.com/sigraxcmms/",
            "slug" => "instagram"
        ]);
    }
}
