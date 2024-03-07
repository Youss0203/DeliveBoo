<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    public $rules = [

        'company_name' => ['required', 'min:3', 'string', 'max:50'],
        'addres' => ['required', 'min:3', 'max:60'],
        'vat_no' => ['required', 'integer', 'min:8', 'max:10'],
        'img_url' => ['required', 'url|image'],
        
    ];
    
    
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

        


        $imageSrc = Storage::put('uploads/restaurants', $data['img_url']);
        $data['img_url'] = $imageSrc;

       
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
        $imageSrc = Storage::put('uploads/restaurants', $data['img_url']);
        $data['img_url'] = $imageSrc;    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
