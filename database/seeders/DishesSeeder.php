<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dishes = [
                [
                'name' =>'Tajine',
                'img_url' =>'https://media.istockphoto.com/id/1143191816/it/foto/tagine-di-pollo-tradizionale-marocchino-con-olive-e-limoni-salati.jpg?s=1024x1024&w=is&k=20&c=HvfkCwd_HyYNqmBwHqvxHTieNuXfVTiot3hq3gOg0fM=',
                'price' => 35,
                'ingredients' => 'Carne (di solito pollo, agnello o manzo), verdure (come carote, patate, zucchine), frutta secca (come prugne, albicocche), spezie (come cumino, zenzero, cannella)',
                'visibility'=> true,
                'description'=>'Il tajine è un piatto tradizionale della cucina del Nord Africa, particolarmente diffuso in Marocco'
                ],
                
                [
                'name' =>'Bastilla',
                'img_url' =>'https://media.istockphoto.com/id/1329347807/it/foto/bastila-o-pastilla-è-un-piatto-marocchino-taradizionale-la-bastila-di-pollo-è-una-torta-piena.jpg?s=1024x1024&w=is&k=20&c=0dpwhMBV80DaIv4qkcdPuzSp7X_ujltmp31BY8XWmOo=',
                'price' => 70,
                'ingredients' => 'Fogli di pasta fillo, pollo o pesce, mandorle, uova, cipolle, spezie (come cannella, zafferano), zucchero a velo',
                'visibility'=> true,
                'description'=>'La bastilla, conosciuta anche come pastilla o bastiya, è un piatto tradizionale della cucina marocchina, tipicamente servito come piatto principale o antipasto durante occasioni speciali e festività',
                ],
                
                [
                'name' =>'Cous Cous',
                'img_url' =>'https://media.istockphoto.com/id/1186400879/it/foto/un-piatto-di-tajine.jpg?s=1024x1024&w=is&k=20&c=Y0dJtsoNhpmJwOEhUgD4HNFwWize7jETFwb8fMq_cDo=',
                'price' => 55,
                'ingredients' => 'Semola di grano duro, verdure (come carote, zucchine, cipolle), carne (di solito agnello o pollo), spezie (come curcuma, cannella, zenzero)',
                'visibility'=> true,
                'description'=>'Il cous cous è un piatto tradizionale nordafricano composto principalmente da granelli di semola di grano duro, solitamente serviti come base per una varietà di salse, verdure e carne',
                
                ],
                [
                'name' =>"Sashimi",
                'img_url' =>"https://media.istockphoto.com/id/621899966/it/foto/sashimi-di-salmone-a-fette-menu-delizioso-di-cibo-crudo-giapponese.jpg?s=1024x1024&w=is&k=20&c=JQ2es5gT67nl9Np0fdlxu7w-X8sMH2sUVE-PzGhrnb4=",
                'price' => 3.50,
                'ingredients' => "Pesce crudo",
                'visibility'=> true,
                'description'=>'Il sashimi è un piatto giapponese composto da fette di pesce crudo fresco, solitamente servite senza riso e condite con salsa di soia, wasabi e zenzero marinato.'
                ],
                [
                'name' =>"Sushi",
                'img_url' =>"https://media.istockphoto.com/id/1053855452/it/foto/sushi-impostato-su-piatto-di-bambù.jpg?s=1024x1024&w=is&k=20&c=-kByBkA1QVrSEl4_n2GYbF2IeWAJ2wdo8A0-Ob3hAqg=",
                'price' => 4,
                'ingredients' => "Pesce crudo, riso, alghe nori",
                'visibility'=> true,   
                'description'=>'Il sushi è un piatto giapponese che consiste in riso condito con aceto di riso e accompagnato da una varietà di ingredienti, tra cui pesce crudo o cotto, frutti di mare, verdure e alghe' 
                ],
                [
                'name' =>"Ramen",
                'img_url' =>"https://media.istockphoto.com/id/1365977387/it/foto/ramen-con-sfrigolio-fumante.jpg?s=1024x1024&w=is&k=20&c=pHK6akYoYsAH9z_TGN3vTYqLYam8mqXlXuGh3z859zE=",
                'price' => 6,
                'ingredients' => "Noodle, brodo, carne (opzionale), uovo, cipollotti",
                'description'=>'Il ramen è un piatto giapponese estremamente popolare e amato in tutto il mondo. È composto principalmente da una base di brodo, noodles, e una varietà di ingredienti che possono includere carne, verdure, uova e condimenti.',
                'visibility'=> true,
                ],
                [
                'name' =>"Tempura",
                'img_url' =>"https://media.istockphoto.com/id/184274745/it/foto/tempura-di-gamberi.jpg?s=1024x1024&w=is&k=20&c=T9gcgGLOUpnYvKBDxJeIOKoEHDao-AFNUZOhFEh4-f0=",
                'price' => 2,
                'ingredients' => "Verdure (come zucchine, carote), gamberi, pesce, pastella",
                'visibility'=> true,
                'description'=>'La tempura è un piatto giapponese costituito da cibo fritto immerso in una pastella leggera e croccante'
                ],
        ];


        //$restaurantIds = Restaurant::all()->pluck('id');
        foreach ($dishes as $dish) {
            $newDish = new Dish();

            $newDish->name = $dish['name'];
           //$newDish->restaurant_id = $restaurantIds[rand(0, count($restaurantIds) - 1)];
            $newDish->img_url = $dish['img_url'];
            $newDish->price = $dish['price'];
            $newDish->ingredients = $dish['ingredients'];
            $newDish->visibility = $dish['visibility'];
            $newDish->description = $dish['description'];
            $newDish->id_restaurant = $dish['description'];
            $newDish->save();
    }
}
}
