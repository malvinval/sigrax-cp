<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBlogsController extends Controller
{
    public function blogs(Request $request) {
        $user = Auth::user();
        $blogs = Blogs::all();


        return view("dashboard.blogs", compact("user", "blogs"));
    }
}
