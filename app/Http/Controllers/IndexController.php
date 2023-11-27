<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blogs;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Product;
use App\Models\Features;
use App\Models\Services;

class IndexController extends Controller
{
    public function welcome() {
        $contents = Home::all();
        $edit_mode = 0;

        return view("welcome", compact("contents", "edit_mode"));
    }

    public function blogs() {
        $blogs = Blogs::where("isArchived", '0')->get();
        return view("blogs", compact("blogs"));
    }

    public function blog(string $slug) {
        $blog = Blogs::where("slug", $slug)->get();

        if($blog->isEmpty()) {
            return abort(404);
        }

        $blog = $blog[0];
        return view("blog", compact("blog"));
    }

    public function contact_us() {
        $contacts = Contact::all();
        return view("contact_us", compact("contacts"));
    }

    public function about() {
        $contents = AboutUs::all();
        $edit_mode = 0;
        return view("about", compact("contents", "edit_mode"));
    }

    public function product_and_features() {
        $products = Product::all();

        return view("products_and_features", compact("products"));
    }

    public function services() {
        $services = Services::all();

        return view("services", compact("services"));
    }

    public function service(string $slug) {
        $services = Services::where("slug", $slug)->get();

        if($services->isEmpty()) {
            return abort(404);
        }

        $service = $services[0];

        return view("service", compact("service"));
    }

    public function features(string $product_slug) {
        $products = Product::where("slug", $product_slug)->get();
        $features = Features::where("product_slug", $product_slug)->get();
        
        if($features->isEmpty()) {
            return abort(404);
        }
        
        if($products->isEmpty()) {
            return abort(404);
        }
        
        $products = $products[0];
        
        // dd($features->first()->title);
        return view("features", compact("features", "products"));
    }
}
