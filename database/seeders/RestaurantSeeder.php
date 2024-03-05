<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants =[
        [
           'company_name' => 'Sakura Sushi Bar',
           'address' => 'Corso Buenos Aires, 256 - Milano',
           'vat_no' => 78635672,
           'img_url'=>'https://media.istockphoto.com/id/157577306/it/foto/interni-del-ristorante-di-sushi-fusion.jpg?s=612x612&w=0&k=20&c=n5OlA2-D8GhtOv4KH6zXyiNXDhNOkle2wf1UxCixEL4=',
        ],
        [
            'company_name' => 'Masuki Izakaya',
            'address' => 'Via Montenapoleone, 2 - Milano',
            'vat_no' => 53627598,
            'img_url'=>'https://media.istockphoto.com/id/175411278/it/foto/cena-al-ristorante-cinese.jpg?s=612x612&w=0&k=20&c=jpojcyiOTE2uIoZJj5hHDgEunbLTHH7pc3ybtkZ3ahc=',
            
        ],
        [
            
            'company_name' => 'Matsuri Izakaya',
            'address' => 'Corso Como, 72 - Milano',
            'vat_no' => 76384753,
            'img_url'=>'https://media.istockphoto.com/id/1125855196/it/foto/una-donna-che-mangia-cibo-fusion-asiatico-in-un-ristorante.jpg?s=612x612&w=0&k=20&c=agIhHKxFbeGSXlZOt02GOBtztzd0PDDSTYp2fIyMobg=',
            
        ], 
    ];
    foreach ($restaurants as $restaurant) {
        $newRestaurant = new Restaurant();

        $newRestaurant->company_name = $restaurant['company_name'];
        $newRestaurant->img_url = $restaurant['img_url'];
        $newRestaurant->address = $restaurant['address'];
        $newRestaurant->vat_no = $restaurant['vat_no'];
        $newRestaurant->save();
}
    }
}
