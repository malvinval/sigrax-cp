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
    public function show(string $id)
    {
        //
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
