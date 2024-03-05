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
                'description'=>'Il tajine è un piatto tradizionale della cucina del Nord Africa, particolarmente diffuso in Marocco',
                'restaurant_id'=> 4,
                ],
                
                [
                'name' =>'Bastilla',
                'img_url' =>'https://media.istockphoto.com/id/1329347807/it/foto/bastila-o-pastilla-è-un-piatto-marocchino-taradizionale-la-bastila-di-pollo-è-una-torta-piena.jpg?s=1024x1024&w=is&k=20&c=0dpwhMBV80DaIv4qkcdPuzSp7X_ujltmp31BY8XWmOo=',
                'price' => 70,
                'ingredients' => 'Fogli di pasta fillo, pollo o pesce, mandorle, uova, cipolle, spezie (come cannella, zafferano), zucchero a velo',
                'visibility'=> true,
                'description'=>'La bastilla, conosciuta anche come pastilla o bastiya, è un piatto tradizionale della cucina marocchina, tipicamente servito come piatto principale o antipasto durante occasioni speciali e festività',
                'restaurant_id'=> 5,
                ],
                
                [
                'name' =>'Cous Cous',
                'img_url' =>'https://media.istockphoto.com/id/1186400879/it/foto/un-piatto-di-tajine.jpg?s=1024x1024&w=is&k=20&c=Y0dJtsoNhpmJwOEhUgD4HNFwWize7jETFwb8fMq_cDo=',
                'price' => 55,
                'ingredients' => 'Semola di grano duro, verdure (come carote, zucchine, cipolle), carne (di solito agnello o pollo), spezie (come curcuma, cannella, zenzero)',
                'visibility'=> true,
                'description'=>'Il cous cous è un piatto tradizionale nordafricano composto principalmente da granelli di semola di grano duro, solitamente serviti come base per una varietà di salse, verdure e carne',
                'restaurant_id'=> 6,
                ],
                [
                'name' =>"Sashimi",
                'img_url' =>"https://media.istockphoto.com/id/621899966/it/foto/sashimi-di-salmone-a-fette-menu-delizioso-di-cibo-crudo-giapponese.jpg?s=1024x1024&w=is&k=20&c=JQ2es5gT67nl9Np0fdlxu7w-X8sMH2sUVE-PzGhrnb4=",
                'price' => 3.50,
                'ingredients' => "Pesce crudo",
                'visibility'=> true,
                'description'=>'Il sashimi è un piatto giapponese composto da fette di pesce crudo fresco, solitamente servite senza riso e condite con salsa di soia, wasabi e zenzero marinato.',
                'restaurant_id'=> 1,
                ],
                [
                'name' =>"Sushi",
                'img_url' =>"https://media.istockphoto.com/id/1053855452/it/foto/sushi-impostato-su-piatto-di-bambù.jpg?s=1024x1024&w=is&k=20&c=-kByBkA1QVrSEl4_n2GYbF2IeWAJ2wdo8A0-Ob3hAqg=",
                'price' => 4,
                'ingredients' => "Pesce crudo, riso, alghe nori",
                'visibility'=> true,   
                'description'=>'Il sushi è un piatto giapponese che consiste in riso condito con aceto di riso e accompagnato da una varietà di ingredienti, tra cui pesce crudo o cotto, frutti di mare, verdure e alghe',
                'restaurant_id'=> 1, 
                ],
                [
                'name' =>"Ramen",
                'img_url' =>"https://media.istockphoto.com/id/1365977387/it/foto/ramen-con-sfrigolio-fumante.jpg?s=1024x1024&w=is&k=20&c=pHK6akYoYsAH9z_TGN3vTYqLYam8mqXlXuGh3z859zE=",
                'price' => 6,
                'ingredients' => "Noodle, brodo, carne (opzionale), uovo, cipollotti",
                'description'=>'Il ramen è un piatto giapponese estremamente popolare e amato in tutto il mondo. È composto principalmente da una base di brodo, noodles, e una varietà di ingredienti che possono includere carne, verdure, uova e condimenti.',
                'visibility'=> true,
                'restaurant_id'=> 2, 
                ],
                [
                'name' =>"Tempura",
                'img_url' =>"https://media.istockphoto.com/id/184274745/it/foto/tempura-di-gamberi.jpg?s=1024x1024&w=is&k=20&c=T9gcgGLOUpnYvKBDxJeIOKoEHDao-AFNUZOhFEh4-f0=",
                'price' => 2,
                'ingredients' => "Verdure (come zucchine, carote), gamberi, pesce, pastella",
                'visibility'=> true,
                'description'=>'La tempura è un piatto giapponese costituito da cibo fritto immerso in una pastella leggera e croccante',
                'restaurant_id'=> 3, 
                ],
                [
                'name' => 'Patatas Bravas con salsa piccante',
                'img_url' => 'https://cdn.cook.stbm.it/thumbnails/ricette/145/145022/hd1600x900.jpg',
                'price' => 8.50,
                'ingredients' => 'Patate, Salsa di pomodoro, Maionese, Pepe di Cayenna, Aglio, Olio d\'oliva, Sale e pepe',
                'visibility' => true,
                'description'=>'Le patatas bravas sono un piatto spagnolo tradizionale, popolare in tutto il Paese e amato per il loro sapore ricco e la loro consistenza croccante. ',
                'restaurant_id'=> 4,
            
                ],
                [
                'name' => 'Gazpacho Andaluz con crostini',
                'img_url' => 'https://blog.giallozafferano.it/simona68/wp-content/uploads/2021/08/gazpacho-andaluso-vert-def-720x1080.jpg',
                'price' => 7.50,
                'ingredients' => 'Peperoni Piquillo, Frutti di mare, Cipolla, Aglio, Pomodori, Prezzemolo fresco, Vino bianco, Pane grattugiato, Uova, Sale e pepe, Olio EVO',
                'visibility' => true,
                'description'=>'Il Gazpacho Andaluz è una zuppa fredda tradizionale della cucina spagnola, originaria della regione dell\'Andalusia.',
                'restaurant_id'=> 4,
                ],
                [
                'name' => 'Piquillos Rellenos di Frutti di Mare',
                'img_url' => 'https://media.istockphoto.com/id/1476140802/it/foto/peperoni-rossi-ripieni-di-nasello-peperoni-piquillo.jpg?s=612x612&w=0&k=20&c=aHlH21WYV3ecR_qYqzSrnM9cQ8b1Z63Qu4zD0vQKOdA=',
                'price' => 7.50,
                'ingredients' => 'Pomodori maturi, Pepe Verde, Cetriolo, Cipolla rossa, Aglio, Pepe Rosso, Pane Raffermo, Aceto di vino rosso, Olio EVO, Sale, Pepe nero, Acqua',
                'visibility' => true,
                'description'=>'I "Piquillos Rellenos di Frutti di Mare" sono un piatto spagnolo che combina i peperoni Piquillo con un ripieno di frutti di mare.',
                'restaurant_id'=> 5,
                ],
                [
                'name' => 'Paella Mixta',
                'img_url' => 'https://media.istockphoto.com/id/510244381/it/foto/paella-di-pesce-tipica-spagnola.jpg?s=612x612&w=0&k=20&c=4ZAfts29r9ROUeHjV2vDiJKDtUlkGn3x6gkrnP1Gh60=',
                'price' => 3.50,
                'ingredients' => 'Pomodori maturi, Pepe Verde, Cetriolo, Cipolla rossa, Aglio, Pepe Rosso, Pane Raffermo, Aceto di vino rosso, Olio EVO, Sale, Pepe nero, Acqua',
                'visibility' => true,
                'description'=>'La Paella Mixta è un piatto tradizionale della cucina spagnola originaria della regione di Valencia, ed è ampiamente apprezzato in tutta la Spagna e oltre.',
                'restaurant_id'=> 6,
                ],
                [
                'name' => 'Pimientos de Padrón con sale grosso',
                'img_url' => 'https://media.istockphoto.com/id/1407053430/it/foto/primo-piano-peperoni-padron-blisterati.jpg?s=612x612&w=0&k=20&c=rGZ7DsJQZqrG5Cxo85vklaRCpFFF2-fJnDS9JRYAQn0=',
                'price' => 4.50,
                'ingredients' => 'Peperoni Padrón, Sale Grosso',
                'visibility' => true,
                'description'=>'I Pimientos de Padrón sono un antipasto tradizionale spagnolo composto da peperoni Padrón, una varietà di peperoncini verdi piccoli, dolci e teneri, fritti e serviti con sale grosso.',
                'restaurant_id'=> 6,
                ],
                [
                'name' => 'Patbingsu',
                'img_url' => 'https://media.istockphoto.com/id/918728292/it/foto/kakigori-starberry-o-starberry-korean-shave-ice-patbingsu-o-bingsu-dessert-congelato-su-tavolo.jpg?s=612x612&w=0&k=20&c=Kkj_nFW4dXFi2CSydtT_HmMwLsB_fC9L-e9iypt6DlU=',
                'price' => 3.50,
                'ingredients' => 'Ghiaccio tritato, Latte condensato, Fagioli rossi zuccherati, Frutta fresca, Farina di Fagioli Rossi',
                'visibility' => true,
                'description'=>'Il Patbingsu è un dessert tradizionale coreano che si distingue per la sua freschezza e la sua presentazione colorata e invitante.',
                'restaurant_id'=>7,
                ],
                [
                'name' => 'Hotteok',
                'img_url' => 'https://media.istockphoto.com/id/1369736332/it/foto/hotteok-frittelle-sudcoreane-o-pasta-fritta-con-noci-e-ripieno-di-zucchero.jpg?s=612x612&w=0&k=20&c=4X73ewr2B8HgEfSqY8WuO4BRHg-U6vmF3h7iV1u3P24=',
                'price' => 5.00,
                'ingredients' => 'Farina di grano, Cipolla verde, Noci, Zucchero di canna, Cannella',
                'visibility' => true,
                'description'=>'Hotteok è un dolce coreano tradizionale amato per il suo ripieno dolce e la sua crosta esterna croccante',
                'restaurant_id'=>8,
                ],
                [
                'name' => 'Bungeoppang',
                'img_url' => 'https://media.istockphoto.com/id/1217080398/it/foto/taiyaki-coreano.jpg?s=612x612&w=0&k=20&c=kLqPPs2UUqaFp8vPrYBsM77--WKvSvyjUaMd5n7myX0=',
                'price' => 5.00,
                'ingredients' => 'Farina, Lievito, Zucchero, Gelato alla Vaniglia',
                'visibility' => true,
                'description'=>'Bungeoppang è un dolce coreano a forma di pesce che si distingue per la sua forma unica e il suo ripieno dolce.',
                'restaurant_id'=>9,
                ],
                [
                'name' => 'Bokbunja-ju',
                'img_url' => 'https://media.istockphoto.com/id/1474357256/it/foto/latte-con-gelatina-di-erba.jpg?s=612x612&w=0&k=20&c=BGkWc3EAUaqtoHhiO3qC39rGeoc5bpkXRBokpoYMdA0=',
                'price' => 3.00,
                'ingredients' => 'Vino di more nere, acqua, zucchero',
                'visibility' => true,
                'description'=>'Il Bokbunja-ju è una bevanda alcolica tradizionale coreana fatta con i frutti di bosso. ',
                'restaurant_id'=>9,
                ],
                [
                'name' => 'Sikhye',
                'img_url' => 'https://media.istockphoto.com/id/1364595239/it/foto/coreano-cinnamon-punch-sujeonggwa.jpg?s=612x612&w=0&k=20&c=fbai5uhCq0FatdY0tepT9agGoHYzG0PcSb-Nj7yAf-Y=',
                'price' => 3.50,
                'ingredients' => 'Riso maltato, acqua, zucchero, uvetta',
                'visibility' => true,
                'description'=>'Il Sikhye è una bevanda dolce e rinfrescante tradizionale coreana, ampiamente apprezzata per il suo sapore unico e la sua consistenza leggermente viscosa.',
                'restaurant_id'=>7,
                ],

     
        ];



        foreach ($dishes as $dish) {
            $newDish = new Dish();

            $newDish->name = $dish['name'];
            $newDish->img_url = $dish['img_url'];
            $newDish->price = $dish['price'];
            $newDish->ingredients = $dish['ingredients'];
            $newDish->visibility = $dish['visibility'];
            $newDish->description = $dish['description'];
            $newDish->restaurant_id = $dish['restaurant_id'];
            $newDish->save();
    }
}
}
