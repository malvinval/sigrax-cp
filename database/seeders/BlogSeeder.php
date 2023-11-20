<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("blogs")->insert([
            "title" => "Perkenalan Sigrax CMMS",
            "author" => "Chandru",
            "slug" => "perkenalan-sigrax-cmms",
            "hero_image" => "https://plus.unsplash.com/premium_photo-1661761077411-d50cba031848?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "content" => "Sigrax CMMS adalah sebuah asset management system.",
            "created_at" => now("Asia/Jakarta"),
            "updated_at" => now("Asia/Jakarta")
        ]);

        DB::table("blogs")->insert([
            "title" => "Mengapa Perusahaan Anda Butuh CMMS",
            "author" => "Chandru",
            "slug" => "mengapa-perusahaan-anda-butuh-cmms",
            "hero_image" => "https://plus.unsplash.com/premium_photo-1661761077411-d50cba031848?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
            "content" => "Karena CMMS kami sangat membantu dalam preventive maintainance",
            "created_at" => now("Asia/Jakarta"),
            "updated_at" => now("Asia/Jakarta")
        ]);
    }
}
