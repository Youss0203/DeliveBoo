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
                ],
                
                [
                'name' =>'Bastilla',
                'img_url' =>'https://media.istockphoto.com/id/1329347807/it/foto/bastila-o-pastilla-è-un-piatto-marocchino-taradizionale-la-bastila-di-pollo-è-una-torta-piena.jpg?s=1024x1024&w=is&k=20&c=0dpwhMBV80DaIv4qkcdPuzSp7X_ujltmp31BY8XWmOo=',
                'price' => 70,
                'ingredients' => 'Fogli di pasta fillo, pollo o pesce, mandorle, uova, cipolle, spezie (come cannella, zafferano), zucchero a velo',
                'visibility'=> true,
                ],
                
                [
                'name' =>'Cous Cous',
                'img_url' =>'https://media.istockphoto.com/id/1186400879/it/foto/un-piatto-di-tajine.jpg?s=1024x1024&w=is&k=20&c=Y0dJtsoNhpmJwOEhUgD4HNFwWize7jETFwb8fMq_cDo=',
                'price' => 55,
                'ingredients' => 'Semola di grano duro, verdure (come carote, zucchine, cipolle), carne (di solito agnello o pollo), spezie (come curcuma, cannella, zenzero)',
                'visibility'=> true,
                ],
                [
                'name' =>"Sashimi",
                'img_url' =>"https://media.istockphoto.com/id/621899966/it/foto/sashimi-di-salmone-a-fette-menu-delizioso-di-cibo-crudo-giapponese.jpg?s=1024x1024&w=is&k=20&c=JQ2es5gT67nl9Np0fdlxu7w-X8sMH2sUVE-PzGhrnb4=",
                'price' => 3.50,
                'ingredients' => "Pesce crudo",
                'visibility'=> true,
                ],
                [
                'name' =>"Sushi",
                'img_url' =>"https://media.istockphoto.com/id/1053855452/it/foto/sushi-impostato-su-piatto-di-bambù.jpg?s=1024x1024&w=is&k=20&c=-kByBkA1QVrSEl4_n2GYbF2IeWAJ2wdo8A0-Ob3hAqg=",
                'price' => 4,
                'ingredients' => "Pesce crudo, riso, alghe nori",
                'visibility'=> true,    
                ],
                [
                'name' =>"Ramen",
                'img_url' =>"https://media.istockphoto.com/id/1365977387/it/foto/ramen-con-sfrigolio-fumante.jpg?s=1024x1024&w=is&k=20&c=pHK6akYoYsAH9z_TGN3vTYqLYam8mqXlXuGh3z859zE=",
                'price' => 6,
                'ingredients' => "Noodle, brodo, carne (opzionale), uovo, cipollotti",
                'visibility'=> true,
                ],
                [
                'name' =>"Tempura",
                'img_url' =>"https://media.istockphoto.com/id/184274745/it/foto/tempura-di-gamberi.jpg?s=1024x1024&w=is&k=20&c=T9gcgGLOUpnYvKBDxJeIOKoEHDao-AFNUZOhFEh4-f0=",
                'price' => 2,
                'ingredients' => "Verdure (come zucchine, carote), gamberi, pesce, pastella",
                'visibility'=> true,
                ],
        ];
        foreach ($dishes as $dish) {
            $newDish = new Dish();

            $newDish->name = $dish['name'];
            $newDish->img_url = $dish['img_url'];
            $newDish->price = $dish['price'];
            $newDish->ingredients = $dish['ingredients'];
            $newDish->visibility = $dish['visibility'];
            $newDish->save();
    }
}
}
