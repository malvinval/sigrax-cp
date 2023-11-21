<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index(Request $request) {
        $blogs = Blogs::where("isArchived", '0')->get();

        return view("blogs", compact("blogs"));
    }

    public function blog($slug) {
        $blog = Blogs::where("slug", $slug)->get();
        $blog = $blog[0];

        return view("blog", compact("blog"));
    }
}
