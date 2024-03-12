<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;


class DishController extends Controller
{
    public function index(Request $request) {  //Restituisce le risorse associate
        if($request->has('restaurant')){
            $restaurants = $request['restaurant'];
            $dishes = Dish::whereHas('restaurants', function ($q) use ($restaurants) {
                $q->whereIn('restaurant_id', $restaurants);
            })->get();
        }else{
            $dishes = Dish::all();
        }
        return response()->json([
            "success" => true,
            "results" => $dishes
        ]);
    }
}
