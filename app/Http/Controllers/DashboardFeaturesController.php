<?php

namespace App\Http\Controllers;

use App\Models\Features;
use App\Models\Product;
use App\Trait\ContentHelperTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardFeaturesController extends Controller
{
    use ContentHelperTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $products = Product::all();
        $product_slug = $request->input("product");
        
        if(!$request->input("product")) {
            $product_slug = $products->first()->slug;
        }

        $features = Features::where("product_slug", $product_slug)->get();

        return view("dashboard.features.index", compact("user", "products", "features"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        $product = Product::where("slug", $request->input("product"))->get();

        if ($product->isEmpty()) {
            return abort(404);
        } else {
            $product = $product[0];
        }

        return view("dashboard.features.create", compact("user", "product"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!$request->input("product")) {
            return abort(400);
        }

        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "desc" => "required|min:1",
            "heroimage" => "image|file"
        ]);

        $validatedData["slug"] = $this->generate_slug($validatedData["title"], Features::all());
        $validatedData["product_slug"] = $request->input("product");

        if($request->file("heroimage")) {
            $validatedData["heroimage"] = $request->file("heroimage")->store("feature-images");
        }

        Features::create($validatedData);

        return redirect("/dashboard/features?product=".$request->input('product'))->with("success", "New feature uploaded");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $user = Auth::user();

        $feature = Features::where("slug", $slug)->get();
        
        if ($feature->isEmpty()) {
            return abort(404);
        } else {
            $feature = $feature[0];
        }

        $product = Product::where("slug", $feature->product_slug)->get();

        return view("dashboard.features.show", compact("feature", "user", "product"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $user = Auth::user();

        $feature = Features::where("slug", $slug)->get();

        if ($feature->isEmpty()) {
            return abort(404);
        } else {
            $feature = $feature[0];
        }

        $product = Product::where("slug", $feature->product_slug)->get();

        return view("dashboard.features.edit", compact("feature", "user", "product"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        if(!$request->input("product")) {
            return abort(400);
        }

        $features = Features::all();
        $feature = Features::where("slug", $slug);
        $feature_collection = $feature->get();

        if ($feature_collection->isEmpty()) {
            return abort(404);
        } else {
            $feature_collection = $feature_collection[0];
        }

        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "desc" => "required|min:1",
            "heroimage" => "image|file"
        ]);
        
        if ($validatedData["title"] == $feature_collection->title) {
            $validatedData["slug"] = $feature_collection["slug"];
        } else {
            $validatedData["slug"] = $this->generate_slug($validatedData["title"], $features);
        }

        $validatedData["product_slug"] = $request->input("product");

        // if($request->public == "on") {
        //     $validatedData["isArchived"] = '0';
        // } else {
        //     $validatedData["isArchived"] = '1';
        // }

        if($request->file("heroimage")) {
            $validatedData["heroimage"] = $request->file("heroimage")->store("feature-images");
        }

        $feature->update($validatedData);

        return redirect("/dashboard/features?product=".$request->input("product"))->with("success", "Feature updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Features::destroy($id);

        return redirect("/dashboard/features")->with("success", "Feature deleted!");
    }
}
