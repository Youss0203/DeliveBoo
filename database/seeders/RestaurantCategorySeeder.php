<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array di dati per le relazioni many-to-many tra restaurant e category
        $restaurantCategories = [
            // giapponesi
            ['restaurant_id' => 1, 'category_id' => 1],
            ['restaurant_id' => 2, 'category_id' => 1],
            ['restaurant_id' => 3, 'category_id' => 1],
            // africani
            ['restaurant_id' => 4, 'category_id' => 2],
            ['restaurant_id' => 5, 'category_id' => 2],
            ['restaurant_id' => 6, 'category_id' => 2],
            // spagnoli
            ['restaurant_id' => 7, 'category_id' => 3],
            ['restaurant_id' => 8, 'category_id' => 3],
            ['restaurant_id' => 9, 'category_id' => 3],
            // coreani
            ['restaurant_id' => 10, 'category_id' => 4],
            ['restaurant_id' => 11, 'category_id' => 4],
            ['restaurant_id' => 12, 'category_id' => 4],
            // cinesi
            ['restaurant_id' => 13, 'category_id' => 5],
            ['restaurant_id' => 14, 'category_id' => 5],
            ['restaurant_id' => 15, 'category_id' => 5],
            // americani
            ['restaurant_id' => 16, 'category_id' => 6],
            ['restaurant_id' => 17, 'category_id' => 6],
            ['restaurant_id' => 18, 'category_id' => 6],
            // messicani
            ['restaurant_id' => 19, 'category_id' => 7],
            ['restaurant_id' => 20, 'category_id' => 7],
            ['restaurant_id' => 21, 'category_id' => 7],
            // indiani
            ['restaurant_id' => 22, 'category_id' => 8],
            ['restaurant_id' => 23, 'category_id' => 8],
            ['restaurant_id' => 24, 'category_id' => 8],
            ['restaurant_id' => 25, 'category_id' => 8],
            ['restaurant_id' => 26, 'category_id' => 8],
            ['restaurant_id' => 27, 'category_id' => 8],
            // italiani 
            ['restaurant_id' => 28, 'category_id' => 9],
            ['restaurant_id' => 29, 'category_id' => 9],
            ['restaurant_id' => 30, 'category_id' => 9],
            ['restaurant_id' => 31, 'category_id' => 9],
            ['restaurant_id' => 32, 'category_id' => 9],
            ['restaurant_id' => 33, 'category_id' => 9],
            // thailandesi 
            ['restaurant_id' => 34, 'category_id' => 10],
            ['restaurant_id' => 35, 'category_id' => 10],
            ['restaurant_id' => 36, 'category_id' => 10],
            ['restaurant_id' => 37, 'category_id' => 10],
            ['restaurant_id' => 38, 'category_id' => 10],
            ['restaurant_id' => 39, 'category_id' => 10],

        ];

        // Itera sull'array e crea i record nella tabella pivot
        foreach ($restaurantCategories as $rc) {
            // Verifica se entrambi i ristoranti e le categorie esistono prima di aggiungere il record
            if (Restaurant::find($rc['restaurant_id']) && Category::find($rc['category_id'])) {
                \DB::table('restaurant_category')->insert($rc);
            }
        }
    }
}
