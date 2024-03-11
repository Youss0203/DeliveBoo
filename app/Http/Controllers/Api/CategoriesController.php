<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index() {  //Restituisce le risorse associate
        $categories = Category::all();
        return response()->json([
            "success" => true,
            "results" => $categories
        ]);
    }
}
