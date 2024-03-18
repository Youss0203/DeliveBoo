<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class DishesController extends Controller
{
    private $rules = [
        'name' => ['required', 'string', 'min:3', 'max:40'],
        'img_url' => ['required', 'image'],
        'price' => ['required', 'decimal:2', 'min:0'],
        'ingredients' => ['required', 'string'],
        'description' => ['required', 'string'],

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


        // $data = $request->all();

        $data['visibility'] = isset($data['visibility']);
        $data['restaurant_id'] = Restaurant::where('user_id', Auth::id())->pluck('id')->first();

        if ($request->hasFile('img_url')) {
            $imageSrc = Storage::put('uploads/dishes', $data['img_url']);
            $data['img_url'] = $imageSrc;
        }

        $newDish = Dish::create($data);
        return redirect()->route('admin.dishes.show', $newDish);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {

        if ($dish->restaurant_id !=  Restaurant::where('id', Auth::id())->pluck('id')->first()) {
            return to_route('admin.dishes.index')->with('Messaggio', 'Non ci sono piatti da visualizzare.');
        }
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        if ($dish->restaurant_id !=  Restaurant::where('id', Auth::id())->pluck('id')->first()) {
            return to_route('admin.dishes.index')->with('Messaggio', 'Non ci sono piatti da visualizzare.');
        }

        $rules = ['price' => 'required|numeric|min:0',]; // validazione prezzo per evitare che sia negativo

        return view('admin.dishes.edit', compact('dish', 'rules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $validator = Validator::make($request->all(), $this->rules, [
            'price.min' => 'Il prezzo deve essere almeno 0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        $data['visibility'] = isset($data['visibility']);

        if (isset($data['price'])) {
            $data['price'] = max(0, $data['price']);
        }

        if ($request->hasFile('img_url')) {
            $imageSrc = Storage::put('uploads/dishes', $data['img_url']);
            $data['img_url'] = $imageSrc;
        }

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
