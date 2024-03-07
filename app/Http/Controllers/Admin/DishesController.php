<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;

class DishesController extends Controller
{
    private $rules = [ 
        'name' => ['required', 'string', 'min:3', 'max:40'],
        'img_url' => ['required', 'url', 'image'],
        'price' => ['required', 'decimal:10', 'max:10'],
        'ingredients' => ['required', 'string'],
        'visibility' => ['required', 'boolean'],
        'description' => ['required', 'string'],
        'restaurant_id' => ['required', 'exists:restaurants,id'],
        
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $id = Restaurant::where('id', Auth::id())->pluck('id')->first();
        $dishes = Dish::where('restaurant_id', $id)->get();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dish = new Dish();
        return view('admin.dishes.create', compact('dish'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = $request->validate($this->rules);
        $data['restaurant_id'] = Restaurant::where('id', Auth::id())->pluck('id')->first();
        
        $newDish = Dish::create($data);
        return redirect()->route('admin.dishes.show', $newDish);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        
        return view('admin.dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $data = $request->validate($this->rules);
        $dish->update($data);
        return redirect()->route('admin.dishes.show', $dish);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();
        return redirect()->route('admin.dishes.index');
    }
}
