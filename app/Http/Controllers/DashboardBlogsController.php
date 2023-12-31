<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Trait\ContentHelperTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBlogsController extends Controller
{
    use ContentHelperTrait;

    public function index(Request $request) {
        $user = Auth::user();
        $request_path = $request->path();
        $blogs = Blogs::where("isArchived", '0')->get();

        if ($request_path == "dashboard/blogs/archived") {
            $blogs = Blogs::where("isArchived", '1')->get();
            return view("dashboard.blogs.archived", compact("user", "blogs"));
        }

        return view("dashboard.blogs.index", compact("user", "blogs"));
    }

    public function show($slug) {
        $user = Auth::user();

        $blog = Blogs::where("slug", $slug)->get();

        if ($blog->isEmpty()) {
            return abort(404);
        } else {
            $blog = $blog[0];
        }

        return view("dashboard.blogs.show", compact("blog", "user"));
    }

    public function edit($slug) {
        $user = Auth::user();

        $blog = Blogs::where("slug", $slug)->get();

        if ($blog->isEmpty()) {
            return abort(404);
        } else {
            $blog = $blog[0];
        }

        return view("dashboard.blogs.edit", compact("blog", "user"));
    }

    public function update(Request $request, $slug) {
        $blogs = Blogs::all();
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
        
        if ($validatedData["title"] == $blog_collection->title) {
            $validatedData["slug"] = $blog_collection["slug"];
        } else {
            $validatedData["slug"] = $this->generate_slug($validatedData["title"], $blogs);
        }
        $validatedData["excerpt"] = $this->generate_excerpt(html_entity_decode(strip_tags($validatedData["content"])), 20);

        if($request->public == "on") {
            $validatedData["isArchived"] = '0';
        } else {
            $validatedData["isArchived"] = '1';
        }

        $blog->update($validatedData);

        return redirect("/dashboard/blogs")->with("success", "Blog updated!");
    }

    public function create(Request $request) {
        $user = Auth::user();
        
        return view("dashboard.blogs.create", compact("user"));
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "content" => "required|min:1",
        ]);

        $blogs = Blogs::all();

        $validatedData["author"] = Auth::user()->name;
        $validatedData["slug"] = $this->generate_slug($validatedData["title"], $blogs);
        $validatedData["excerpt"] = $this->generate_excerpt(html_entity_decode(strip_tags($validatedData["content"])), 50);
        $validatedData["hero_image"] = "";

        if($request->public == "on") {
            $validatedData["isArchived"] = '0';
        } else {
            $validatedData["isArchived"] = '1';
        }
        
        Blogs::create($validatedData);

        return redirect("/dashboard/blogs")->with("success", "New blog created!");
    }

    public function destroy($id) {
        Blogs::destroy($id);

        return redirect("/dashboard/blogs")->with("success", "Blog deleted!");
    }
}
