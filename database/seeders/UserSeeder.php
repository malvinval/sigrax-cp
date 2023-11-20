<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "name" => "Chandru SIGRAX",
            "email" => "chandru@sigrax.com",
            "email_verified_at" => now("Asia/Jakarta"),
            "password" => Hash::make("12345678"),
            "is_admin" => '1'
        ]);

        DB::table("users")->insert([
            "name" => "Malvin Valerian",
            "email" => "malvin@sigrax.com",
            "email_verified_at" => now("Asia/Jakarta"),
            "password" => Hash::make("12345678"),
            "is_admin" => '0'
        ]);
    }
}
