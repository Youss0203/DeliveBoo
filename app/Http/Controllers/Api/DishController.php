<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;


class DishController extends Controller
{
    public function index(Request $request) {  //Restituisce le risorse associate
        $dishes = Dish::where('restaurant_id' , $request['restaurant'])->get();
        return response()->json([
            "success" => true,
            "results" => $dishes
        ]);
    }
}
