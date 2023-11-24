<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAboutUsController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        $section = $request->input("section");
        $edit_mode = "0";
        
        if(!$request->input("section")) {
            $section = "1";
        }

        if($request->input("edit_mode")) {
            $edit_mode = "1";
        }
            
        $contents = AboutUs::where("section", $section)->get();

        return view("dashboard.about_us.index", compact("user", "contents", "section", "edit_mode"));
    }

    public function update(Request $request, string $subsection) {
        $content = AboutUs::where("subsection", $subsection);

        $validatedData = $request->validate([
            "content" => "required|min:1|max:255"
        ]);

        $content->update($validatedData);

        return back()->with("success", "Content updated!");
    }
}
