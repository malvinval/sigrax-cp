<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("features")->insert([
            "title" => "Executive Dashboard",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Master Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Asset Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Location Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Work Request Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Work Order Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Material Request Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Inventory Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Preventive Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Employee Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Report Module",
            "desc" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, omnis voluptatem expedita temporibus cum voluptate corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis? Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus harum",
            "product_slug" => "cmms-software"
        ]);
    }
}
