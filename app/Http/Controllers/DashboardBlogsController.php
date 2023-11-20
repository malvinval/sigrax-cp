<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardBlogsController extends Controller
{
    public function blogs(Request $request) {
        $user = Auth::user();

        return view("dashboard.blogs", compact("user"));
    }
}
