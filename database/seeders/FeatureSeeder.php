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
            "slug" => "executive-dashboard",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Master Module",
            "slug" => "master-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Asset Module",
            "slug" => "asset-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Location Module",
            "slug" => "location-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Work Request Module",
            "slug" => "work-request-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Work Order Module",
            "slug" => "work-order-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Material Request Module",
            "slug" => "material-request-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Inventory Module",
            "slug" => "inventory-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Preventive Module",
            "slug" => "preventive-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Employee Module",
            "slug" => "employee-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);

        DB::table("features")->insert([
            "title" => "Report Module",
            "slug" => "report-module",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "product_slug" => "cmms-software"
        ]);
    }
}
