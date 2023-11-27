<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Trait\ContentHelperTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardProductsController extends Controller
{
    use ContentHelperTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $products = Product::all();

        return view("dashboard.products.index", compact("user", "products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();

        return view("dashboard.products.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "desc" => "required|min:1"
        ]);

        $validatedData["slug"] = $this->generate_slug($validatedData["title"], Product::all());

        Product::create($validatedData);

        return redirect("/dashboard/products")->with("success", "New product uploaded");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $user = Auth::user();

        $product = Product::where("slug", $slug)->get();

        if ($product->isEmpty()) {
            return abort(404);
        } else {
            $product = $product[0];
        }

        return view("dashboard.products.show", compact("product", "user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $user = Auth::user();

        $product = Product::where("slug", $slug)->get();

        if ($product->isEmpty()) {
            return abort(404);
        } else {
            $product = $product[0];
        }

        return view("dashboard.products.edit", compact("product", "user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $products = Product::all();
        $product = Product::where("slug", $slug);
        $product_collection = $product->get();

        if ($product_collection->isEmpty()) {
            return abort(404);
        } else {
            $product_collection = $product_collection[0];
        }

        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "desc" => "required|min:1"
        ]);
        
        if ($validatedData["title"] == $product_collection->title) {
            $validatedData["slug"] = $product_collection["slug"];
        } else {
            $validatedData["slug"] = $this->generate_slug($validatedData["title"], $products);
        }

        // if($request->public == "on") {
        //     $validatedData["isArchived"] = '0';
        // } else {
        //     $validatedData["isArchived"] = '1';
        // }

        $product->update($validatedData);

        return redirect("/dashboard/products")->with("success", "Product updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);

        return redirect("/dashboard/products")->with("success", "Product deleted!");
    }
}
