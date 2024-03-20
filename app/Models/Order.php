<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // fillable per gli ordini 
    protected $fillable = [
        'customer_name', 'customer_lastname', 'customer_address', 'customer_phone',
        // dovrebbe esserci anche total_amount ma va passato dal prezzo tot del carrello oppure lasciato stare 
    ];

    public function dishes()
    {
        return $this->belongsToMany(Dish::class)->withPivot('quantity');
    }
}
