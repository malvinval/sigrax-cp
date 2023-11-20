<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBlogsController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        $blogs = Blogs::all();

        return view("dashboard.blogs", compact("user", "blogs"));
    }

    public function show($slug) {
        $user = Auth::user();

        $blog = Blogs::where("slug", $slug)->get();
        $blog = $blog[0];

        return view("dashboard.blog", compact("blog", "user"));
    }

    public function edit($slug) {
        $user = Auth::user();

        $blog = Blogs::where("slug", $slug)->get();
        $blog = $blog[0];

        return view("dashboard.edit_blog", compact("blog", "user"));
    }

    public function update(Request $request, $slug) {
        $blog = Blogs::where("slug", $slug);

        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "content" => "required"
        ]);

        $validatedData["slug"] = $this->generate_slug($validatedData["title"]);
        $validatedData["excerpt"] = $this->generate_excerpt($validatedData["content"], 20);

        $blog->update($validatedData);

        return redirect("/dashboard/blogs")->with("success", "Blog updated!");
    }

    public function generate_slug($string) {
        $string = strtolower($string);

        $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);

        $slug = str_replace(' ', '-', $string);

        return $slug;
    }

    public function generate_excerpt($string, $length) {
        if (strlen($string) <= $length) {
            return $string;
        } else {
            $excerpt = substr($string, 0, $length);
            return $excerpt;
        }
    }
}
