<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $contents = AboutUs::all();
        $edit_mode = 0;

        return view("about", compact("contents", "edit_mode"));
    }
}
