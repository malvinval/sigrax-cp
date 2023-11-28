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
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "slug" => "consulting"
        ]);

        DB::table("services")->insert([
            "title" => "Implementation",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "slug" => "implementation"
        ]);

        DB::table("services")->insert([
            "title" => "Installation",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "slug" => "installation"
        ]);

        DB::table("services")->insert([
            "title" => "Training",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "slug" => "training"
        ]);

        DB::table("services")->insert([
            "title" => "Support",
            "desc" => "<div><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong><br><br>Sit, omnis voluptatem <em>expedita temporibus cum voluptate</em> corporis exercitationem qui at, nulla debitis nam fuga eaque quibusdam dolore nobis?<br><br>Voluptas commodi ipsa aperiam quae tenetur enim, quidem modi explicabo excepturi, eius voluptatem eum ipsum dolorem esse quo laborum ad dolor necessitatibus <del>harum</del></div>",
            "slug" => "support"
        ]);
    }
}
