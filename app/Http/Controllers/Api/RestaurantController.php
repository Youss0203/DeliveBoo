<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index(Request $request) {  //Restituisce le risorse associate
        if($request->has('category')){
            $categories = $request['category'];
            $restaurants = Restaurant::whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('category_id', $categories);
            })->with('categories')->get();
            return response()->json([
                "success" => true,
                "results" => $restaurants
            ]);
        }
    }
}

