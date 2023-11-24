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
        
        if(!$request->input("section")) {
            $section = "1";
        }
            
        $contents = AboutUs::where("section", $section)->get();

        return view("dashboard.about_us.index", compact("user", "contents", "section"));
    }

    public function edit(string $subsection) {
        return view("dashboard.about_us.edit", compact("user"));
    }
}
