<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validazione dei dati inviati dalla richiesta
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_lastname' => 'required|string|max:255',
            'customer_address' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
        ]);

        // Creazione di un nuovo ordine utilizzando i dati validati
        Order::create($validatedData);
        // Restituisci una risposta per indicare che l'ordine è stato salvato con successo
        return response()->json(['message' => 'Ordine salvato con successo'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
