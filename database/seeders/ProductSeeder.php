<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            "title" => "CMMS Software",
            "slug" => "cmms-software",
            "desc" => "Computerized Maintenance Management System (CMMS) is a software package for complete end-to-end Facility management and monitoring of assets and it maintenance throughout the company. Computerized Maintenance Management System (CMMS) have evolved over the last three decades from elementary asset tracking and preventive maintenance functionality, to enterprise maintenance information systems."
        ]);
    }
}
