<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.restaurants.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $restaurants = new Restaurant();
        $categories = Category::all();

        return view('admin.restaurants.create', compact('restaurants', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $newRestaurant = Restaurant::create($data);

        $newRestaurant->categories()->sync($data['categories']);

        

        // store -> 
        // $imageSrc = Storage::put('uploads/posts', $data['post_image']);
        // $data['post_image'] = $imageSrc;

        // update -> 
        // $imageSrc = Storage::put('uploads/posts', $data['post_image']);
        // $data['post_image'] = $imageSrc;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
