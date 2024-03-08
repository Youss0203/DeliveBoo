<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use App\Models\Order;
use Faker\Generator as Faker;

class DishOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $orders = Order::all();
        $dishesIds = Dish::all()->pluck('id');

        // per ogni ordine ne mette un num casuale da 1 a 5 id dentro a quell'ordine 
        foreach ($orders as $order) {
            $order->dishes()->syncWithPivotValues($faker->randomElements($dishesIds, rand(1, 5), false), ['quantity' => $faker->numberBetween(1, 20)]);
        }
    }
}
