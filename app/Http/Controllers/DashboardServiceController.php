<?php

namespace App\Http\Controllers;

use App\Models\Services;
use App\Trait\ContentHelperTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardServiceController extends Controller
{
    use ContentHelperTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $services = Services::all();

        return view("dashboard.services.index", compact("user", "services"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        
        return view("dashboard.services.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "desc" => "required|min:1",
        ]);

        $blogs = Services::all();

        $validatedData["slug"] = $this->generate_slug($validatedData["title"], $blogs);

        // if($request->public == "on") {
        //     $validatedData["isArchived"] = '0';
        // } else {
        //     $validatedData["isArchived"] = '1';
        // }
        
        Services::create($validatedData);

        return redirect("/dashboard/services")->with("success", "New service created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $services = Services::where("slug", $slug)->get();
        $user = Auth::user();

        if($services->isEmpty()) {
            return abort(404);
        }

        $service = $services[0];

        return view("dashboard.services.show", compact("service", "user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $user = Auth::user();

        $service = Services::where("slug", $slug)->get();

        if ($service->isEmpty()) {
            return abort(404);
        } else {
            $service = $service[0];
        }

        return view("dashboard.services.edit", compact("service", "user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $service = Services::where("slug", $slug);
        $service_collection = $service->get();
        

        if ($service_collection->isEmpty()) {
            return abort(404);
        } else {
            $service_collection = $service_collection[0];
        }

        $validatedData = $request->validate([
            "title" => "required|min:1|max:255",
            "desc" => "required"
        ]);
        
        if ($validatedData["title"] == $service_collection->title) {
            $validatedData["slug"] = $service_collection["slug"];
        } else {
            $validatedData["slug"] = $this->generate_slug($validatedData["title"], Services::all());
        }

        // if($request->public == "on") {
        //     $validatedData["isArchived"] = '0';
        // } else {
        //     $validatedData["isArchived"] = '1';
        // }

        $service->update($validatedData);

        return redirect("/dashboard/services")->with("success", "Service updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Services::destroy($id);

        return redirect("/dashboard/services")->with("success", "Service deleted!");
    }
}
