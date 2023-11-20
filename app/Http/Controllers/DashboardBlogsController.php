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

        if ($blog->isEmpty()) {
            return abort(404);
        } else {
            $blog = $blog[0];
        }

        return view("dashboard.blog", compact("blog", "user"));
    }

    public function edit($slug) {
        $user = Auth::user();

        $blog = Blogs::where("slug", $slug)->get();

        if ($blog->isEmpty()) {
            return abort(404);
        } else {
            $blog = $blog[0];
        }

        return view("dashboard.edit_blog", compact("blog", "user"));
    }

    public function update(Request $request, $slug) {
        $blog = Blogs::where("slug", $slug);
        $blog_collection = $blog->get();

        if ($blog_collection->isEmpty()) {
            return abort(404);
        } else {
            $blog_collection = $blog_collection[0];
        }

        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "content" => "required"
        ]);

        $validatedData["slug"] = $this->generate_slug($validatedData["title"]);
        $validatedData["excerpt"] = $this->generate_excerpt($validatedData["content"], 20);

        $blog->update($validatedData);

        return redirect("/dashboard/blogs")->with("success", "Blog updated!");
    }

    public function create(Request $request) {
        $user = Auth::user();
        
        return view("dashboard.create", compact("user"));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "content" => "required|min:1",
        ]);

        $validatedData["author"] = Auth::user()->name;
        $validatedData["slug"] = $this->generate_slug($validatedData["title"]);
        $validatedData["excerpt"] = $this->generate_excerpt($validatedData["content"], 20);
        $validatedData["hero_image"] = "";
        
        Blogs::create($validatedData);

        return redirect("/dashboard/blogs")->with("success", "New blog created!");
    }

    public function generate_slug($string) {
        $string = strtolower($string);

        $string = preg_replace('/[^a-zA-Z0-9\s]/', 'x', $string);

        $slug = str_replace(' ', '-', $string);

        // check if slug already used
        $blog = Blogs::where('slug', $slug)->get();

        if(!$blog->isEmpty()) {
            $slug .= "-".rand(1, 100000);
        }

        return $slug;
    }

    public function generate_excerpt($string, $length) {
        if (strlen($string) <= $length) {
            return $string."...";
        } else {
            $excerpt = substr($string, 0, $length);
            return $excerpt."...";
        }
    }
}
