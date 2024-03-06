<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function dishes()
    {
        return $this->hasMany(Dish::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    protected $fillable = [

        'company_name',
        'address',
        'vat_no',
        'img_url',
        'user_id',
    ];
}
