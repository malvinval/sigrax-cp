<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductAndFeaturesController extends Controller
{
    public function index() {


        return view("product_and_features");
    }
}
