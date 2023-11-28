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
            "desc" => "required|min:1"
        ]);

        $validatedData["slug"] = $this->generate_slug($validatedData["title"], Product::all());
        $validatedData["product_slug"] = $request->input("product");

        // dd($validatedData);

        Features::create($validatedData);

        return redirect("/dashboard/features?product=".$request->input('product'))->with("success", "New product uploaded");
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
