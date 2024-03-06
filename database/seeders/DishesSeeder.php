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
                'name' => 'Tajine',
                'img_url' => 'https://media.istockphoto.com/id/1143191816/it/foto/tagine-di-pollo-tradizionale-marocchino-con-olive-e-limoni-salati.jpg?s=1024x1024&w=is&k=20&c=HvfkCwd_HyYNqmBwHqvxHTieNuXfVTiot3hq3gOg0fM=',
                'price' => 35,
                'ingredients' => 'Carne (di solito pollo, agnello o manzo), verdure (come carote, patate, zucchine), frutta secca (come prugne, albicocche), spezie (come cumino, zenzero, cannella)',
                'visibility' => true,
                'description' => 'Il tajine è un piatto tradizionale della cucina del Nord Africa, particolarmente diffuso in Marocco',
                'restaurant_id' => 4,
            ],

            [
                'name' => 'Bastilla',
                'img_url' => 'https://media.istockphoto.com/id/1329347807/it/foto/bastila-o-pastilla-è-un-piatto-marocchino-taradizionale-la-bastila-di-pollo-è-una-torta-piena.jpg?s=1024x1024&w=is&k=20&c=0dpwhMBV80DaIv4qkcdPuzSp7X_ujltmp31BY8XWmOo=',
                'price' => 70,
                'ingredients' => 'Fogli di pasta fillo, pollo o pesce, mandorle, uova, cipolle, spezie (come cannella, zafferano), zucchero a velo',
                'visibility' => true,
                'description' => 'La bastilla, conosciuta anche come pastilla o bastiya, è un piatto tradizionale della cucina marocchina, tipicamente servito come piatto principale o antipasto durante occasioni speciali e festività',
                'restaurant_id' => 5,
            ],

            [
                'name' => 'Cous Cous',
                'img_url' => 'https://media.istockphoto.com/id/1186400879/it/foto/un-piatto-di-tajine.jpg?s=1024x1024&w=is&k=20&c=Y0dJtsoNhpmJwOEhUgD4HNFwWize7jETFwb8fMq_cDo=',
                'price' => 55,
                'ingredients' => 'Semola di grano duro, verdure (come carote, zucchine, cipolle), carne (di solito agnello o pollo), spezie (come curcuma, cannella, zenzero)',
                'visibility' => true,
                'description' => 'Il cous cous è un piatto tradizionale nordafricano composto principalmente da granelli di semola di grano duro, solitamente serviti come base per una varietà di salse, verdure e carne',
                'restaurant_id' => 6,
            ],
            [
                'name' => 'Sashimi',
                'img_url' => 'https://media.istockphoto.com/id/621899966/it/foto/sashimi-di-salmone-a-fette-menu-delizioso-di-cibo-crudo-giapponese.jpg?s=1024x1024&w=is&k=20&c=JQ2es5gT67nl9Np0fdlxu7w-X8sMH2sUVE-PzGhrnb4=',
                'price' => 3.50,
                'ingredients' => 'Pesce crudo',
                'visibility' => true,
                'description' => 'Il sashimi è un piatto giapponese composto da fette di pesce crudo fresco, solitamente servite senza riso e condite con salsa di soia, wasabi e zenzero marinato.',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Sushi',
                'img_url' => 'https://media.istockphoto.com/id/1053855452/it/foto/sushi-impostato-su-piatto-di-bambù.jpg?s=1024x1024&w=is&k=20&c=-kByBkA1QVrSEl4_n2GYbF2IeWAJ2wdo8A0-Ob3hAqg=',
                'price' => 4,
                'ingredients' => 'Pesce crudo, riso, alghe nori',
                'visibility' => true,
                'description' => 'Il sushi è un piatto giapponese che consiste in riso condito con aceto di riso e accompagnato da una varietà di ingredienti, tra cui pesce crudo o cotto, frutti di mare, verdure e alghe',
                'restaurant_id' => 1,
            ],
            [
                'name' => 'Ramen',
                'img_url' => 'https://media.istockphoto.com/id/1365977387/it/foto/ramen-con-sfrigolio-fumante.jpg?s=1024x1024&w=is&k=20&c=pHK6akYoYsAH9z_TGN3vTYqLYam8mqXlXuGh3z859zE=',
                'price' => 6,
                'ingredients' => 'Noodle, brodo, carne (opzionale), uovo, cipollotti',
                'description' => 'Il ramen è un piatto giapponese estremamente popolare e amato in tutto il mondo. È composto principalmente da una base di brodo, noodles, e una varietà di ingredienti che possono includere carne, verdure, uova e condimenti.',
                'visibility' => true,
                'restaurant_id' => 2,
            ],
            [
                'name' => 'Tempura',
                'img_url' => 'https://media.istockphoto.com/id/184274745/it/foto/tempura-di-gamberi.jpg?s=1024x1024&w=is&k=20&c=T9gcgGLOUpnYvKBDxJeIOKoEHDao-AFNUZOhFEh4-f0=',
                'price' => 2,
                'ingredients' => 'Verdure (come zucchine, carote), gamberi, pesce, pastella',
                'visibility' => true,
                'description' => 'La tempura è un piatto giapponese costituito da cibo fritto immerso in una pastella leggera e croccante',
                'restaurant_id' => 3,
            ],
            [
                'name' => 'Patatas Bravas con salsa piccante',
                'img_url' => 'https://cdn.cook.stbm.it/thumbnails/ricette/145/145022/hd1600x900.jpg',
                'price' => 8.50,
                'ingredients' => 'Patate, Salsa di pomodoro, Maionese, Pepe di Cayenna, Aglio, Olio d\'oliva, Sale e pepe',
                'visibility' => true,
                'description' => 'Le patatas bravas sono un piatto spagnolo tradizionale, popolare in tutto il Paese e amato per il loro sapore ricco e la loro consistenza croccante. ',
                'restaurant_id' => 4,

            ],
            [
                'name' => 'Gazpacho Andaluz con crostini',
                'img_url' => 'https://blog.giallozafferano.it/simona68/wp-content/uploads/2021/08/gazpacho-andaluso-vert-def-720x1080.jpg',
                'price' => 7.50,
                'ingredients' => 'Peperoni Piquillo, Frutti di mare, Cipolla, Aglio, Pomodori, Prezzemolo fresco, Vino bianco, Pane grattugiato, Uova, Sale e pepe, Olio EVO',
                'visibility' => true,
                'description' => 'Il Gazpacho Andaluz è una zuppa fredda tradizionale della cucina spagnola, originaria della regione dell\'Andalusia.',
                'restaurant_id' => 4,
            ],
            [
                'name' => 'Piquillos Rellenos di Frutti di Mare',
                'img_url' => 'https://media.istockphoto.com/id/1476140802/it/foto/peperoni-rossi-ripieni-di-nasello-peperoni-piquillo.jpg?s=612x612&w=0&k=20&c=aHlH21WYV3ecR_qYqzSrnM9cQ8b1Z63Qu4zD0vQKOdA=',
                'price' => 7.50,
                'ingredients' => 'Pomodori maturi, Pepe Verde, Cetriolo, Cipolla rossa, Aglio, Pepe Rosso, Pane Raffermo, Aceto di vino rosso, Olio EVO, Sale, Pepe nero, Acqua',
                'visibility' => true,
                'description' => 'I Piquillos Rellenos di Frutti di Mare sono un piatto spagnolo che combina i peperoni Piquillo con un ripieno di frutti di mare.',
                'restaurant_id' => 5,
            ],
            [
                'name' => 'Paella Mixta',
                'img_url' => 'https://media.istockphoto.com/id/510244381/it/foto/paella-di-pesce-tipica-spagnola.jpg?s=612x612&w=0&k=20&c=4ZAfts29r9ROUeHjV2vDiJKDtUlkGn3x6gkrnP1Gh60=',
                'price' => 3.50,
                'ingredients' => 'Pomodori maturi, Pepe Verde, Cetriolo, Cipolla rossa, Aglio, Pepe Rosso, Pane Raffermo, Aceto di vino rosso, Olio EVO, Sale, Pepe nero, Acqua',
                'visibility' => true,
                'description' => 'La Paella Mixta è un piatto tradizionale della cucina spagnola originaria della regione di Valencia, ed è ampiamente apprezzato in tutta la Spagna e oltre.',
                'restaurant_id' => 6,
            ],
            [
                'name' => 'Pimientos de Padrón con sale grosso',
                'img_url' => 'https://media.istockphoto.com/id/1407053430/it/foto/primo-piano-peperoni-padron-blisterati.jpg?s=612x612&w=0&k=20&c=rGZ7DsJQZqrG5Cxo85vklaRCpFFF2-fJnDS9JRYAQn0=',
                'price' => 4.50,
                'ingredients' => 'Peperoni Padrón, Sale Grosso',
                'visibility' => true,
                'description' => 'I Pimientos de Padrón sono un antipasto tradizionale spagnolo composto da peperoni Padrón, una varietà di peperoncini verdi piccoli, dolci e teneri, fritti e serviti con sale grosso.',
                'restaurant_id' => 6,
            ],
            [
                'name' => 'Patbingsu',
                'img_url' => 'https://media.istockphoto.com/id/918728292/it/foto/kakigori-starberry-o-starberry-korean-shave-ice-patbingsu-o-bingsu-dessert-congelato-su-tavolo.jpg?s=612x612&w=0&k=20&c=Kkj_nFW4dXFi2CSydtT_HmMwLsB_fC9L-e9iypt6DlU=',
                'price' => 3.50,
                'ingredients' => 'Ghiaccio tritato, Latte condensato, Fagioli rossi zuccherati, Frutta fresca, Farina di Fagioli Rossi',
                'visibility' => true,
                'description' => 'Il Patbingsu è un dessert tradizionale coreano che si distingue per la sua freschezza e la sua presentazione colorata e invitante.',
                'restaurant_id' => 7,
            ],
            [
                'name' => 'Hotteok',
                'img_url' => 'https://media.istockphoto.com/id/1369736332/it/foto/hotteok-frittelle-sudcoreane-o-pasta-fritta-con-noci-e-ripieno-di-zucchero.jpg?s=612x612&w=0&k=20&c=4X73ewr2B8HgEfSqY8WuO4BRHg-U6vmF3h7iV1u3P24=',
                'price' => 5.00,
                'ingredients' => 'Farina di grano, Cipolla verde, Noci, Zucchero di canna, Cannella',
                'visibility' => true,
                'description' => 'Hotteok è un dolce coreano tradizionale amato per il suo ripieno dolce e la sua crosta esterna croccante',
                'restaurant_id' => 8,
            ],
            [
                'name' => 'Bungeoppang',
                'img_url' => 'https://media.istockphoto.com/id/1217080398/it/foto/taiyaki-coreano.jpg?s=612x612&w=0&k=20&c=kLqPPs2UUqaFp8vPrYBsM77--WKvSvyjUaMd5n7myX0=',
                'price' => 5.00,
                'ingredients' => 'Farina, Lievito, Zucchero, Gelato alla Vaniglia',
                'visibility' => true,
                'description' => 'Bungeoppang è un dolce coreano a forma di pesce che si distingue per la sua forma unica e il suo ripieno dolce.',
                'restaurant_id' => 9,
            ],
            [
                'name' => 'Bokbunja-ju',
                'img_url' => 'https://media.istockphoto.com/id/1474357256/it/foto/latte-con-gelatina-di-erba.jpg?s=612x612&w=0&k=20&c=BGkWc3EAUaqtoHhiO3qC39rGeoc5bpkXRBokpoYMdA0=',
                'price' => 3.00,
                'ingredients' => 'Vino di more nere, acqua, zucchero',
                'visibility' => true,
                'description' => 'Il Bokbunja-ju è una bevanda alcolica tradizionale coreana fatta con i frutti di bosso. ',
                'restaurant_id' => 9,
            ],
            [
                'name' => 'Sikhye',
                'img_url' => 'https://media.istockphoto.com/id/1364595239/it/foto/coreano-cinnamon-punch-sujeonggwa.jpg?s=612x612&w=0&k=20&c=fbai5uhCq0FatdY0tepT9agGoHYzG0PcSb-Nj7yAf-Y=',
                'price' => 3.50,
                'ingredients' => 'Riso maltato, acqua, zucchero, uvetta',
                'visibility' => true,
                'description' => 'Il Sikhye è una bevanda dolce e rinfrescante tradizionale coreana, ampiamente apprezzata per il suo sapore unico e la sua consistenza leggermente viscosa.',
                'restaurant_id' => 7,
            ],
            [
                'name' => 'Involtini Primavera ai Gamberi',
                'img_url' => 'https://media.istockphoto.com/id/1175470424/it/foto/involtini-primavera-asiatici-crudi-di-carta-di-riso-con-gamberi-spaghetti-di-riso-lattuga-e.jpg?s=612x612&w=0&k=20&c=o2XjhIdNvun8WAWlH3lVi8jZ6Jcl9fGIVZyqGIF8KJA=',
                'price' => 6.50,
                'ingredients' => 'Verza, gamberetti, uova, funghi cinesi, salsa di soia, olio di semi',
                'visibility' => true,
                'description' => 'Involtini Primavera ai Gamberi: un\'esplosione di sapori orientali con fresche verdure, gamberi saporiti e carta di riso, da gustare fritti o al vapore con salsa di soia, agrodolce o cocktail.',
                'restaurant_id' => 10,
            ],

            [
                'name' => 'Ravioli di Gamberi al vapore',
                'img_url' => 'https://media.istockphoto.com/id/1282749403/it/foto/gnocchi-pieni-di-cavolo-pierogi-varenyky-vareniki-pirohy-gnocchi-con-ripieno.jpg?s=612x612&w=0&k=20&c=1z7apP5_DpPlrf5SGrtldaqF3aCT2L0WIJswsotZ-OA=',
                'price' => 6.00,
                'ingredients' => 'Pasta per ravioli, gamberetti, zenzero, cipollotto, olio di sesamo',
                'visibility' => true,
                'description' => 'Ravioli di Gamberi al vapore: morbida pasta racchiude un cuore di gamberi saporiti, per un\'esperienza di gusto delicata e raffinata.',
                'restaurant_id' => 10,
            ],

            [
                'name' => 'Zuppa di Granchio e Asparagi',
                'img_url' => 'https://media.istockphoto.com/id/1022408050/it/foto/zuppa-di-panna-di-granchio.jpg?s=612x612&w=0&k=20&c=kV6FKod3ptywMwJ3yHejJDByrrersw_MD8U4zDFVjf4=',
                'price' => 9.00,
                'ingredients' => 'Carne di granchio, asparagi, brodo di pollo, zenzero, cipollotto',
                'visibility' => true,
                'description' => 'Zuppa di Granchio e Asparagi: un connubio cremoso e avvolgente tra il sapore dolce del granchio e il gusto fresco degli asparagi, per un primo piatto elegante e raffinato.',
                'restaurant_id' => 11,
            ],

            [
                'name' => 'Ravioli di Verdure al Vapore',
                'img_url' => 'https://media.istockphoto.com/id/1413654815/it/foto/vareniky-ripieni-di-funghi-di-patate-pierogi-o-gnocchi.jpg?s=612x612&w=0&k=20&c=ewUaO343C70DwvKWNe8M_vsLdTsl1TvYBhR6bzAdmAQ=',
                'price' => 6.00,
                'ingredients' => 'Pasta per ravioli, verdure miste (carote, fagiolini, funghi), salsa di soia',
                'visibility' => true,
                'description' => 'Ravioli di Verdure al Vapore: un\'esplosione di colori e sapori vegetali racchiusi in un morbido involucro di pasta, per un piatto sano e leggero perfetto per ogni palato.',
                'restaurant_id' => 11,
            ],

            [
                'name' => 'Tofu Saltato con Verdure',
                'img_url' => 'https://media.istockphoto.com/id/1181820712/it/foto/mescolare-tofu-fritto-e-verdure-con-salsa-di-arachidi.jpg?s=612x612&w=0&k=20&c=tL7RYGBW9v0G8gKyhQ-xEp4CMPwZ1Cqp2Q8uBEa5_Ro=',
                'price' => 7.50,
                'ingredients' => 'Tofu, verdure miste (peperoni, cipolle, broccoli), salsa di soia, olio di semi',
                'visibility' => true,
                'description' => 'Tofu Saltato con Verdure: un piatto vegano ricco di proteine e vitamine, dove il tofu morbido si sposa con il gusto croccante delle verdure saltate in padella, per un\'esperienza culinaria sana e saporita.',
                'restaurant_id' => 12,
            ],
            [
                'name' => 'Costine St. Louis Fumanti',
                'img_url' => 'https://media.istockphoto.com/id/1221822964/it/foto/lento-arrostito-st-louis-stile-bambino-indietro-costole-di-maiale.jpg?s=1024x1024&w=is&k=20&c=r9q3j4rOk6oxTLmYTLwFxvSv7Egb3ivESr16ynwhADA=',
                'price' => 18.99,
                'ingredients' => 'frizione a secco, salsa barbecue segreta di Big Al',
                'description' => 'Costine di maiale in stile St. Louis',
                'visibility' => true,
                'restaurant_id' => 13,
            ],


            [
                'name' => 'Pollo Fritto alla Southern con Waffle',
                'img_url' => 'https://media.istockphoto.com/id/1325150602/it/foto/cialde-con-pollo-fritto.jpg?s=1024x1024&w=is&k=20&c=ujZ_y2YbnHcXZ7cENgRuhPsPoJOyh_H6rkYPdotxaSM=',
                'price' => 15.99,
                'ingredients' => 'Pollo fritto al latticello, waffle belga, sciroppo d\'acero',
                'visibility' => true,
                'description' => 'Il Pollo Fritto alla Southern con Waffle è un\'abbinata iconica della cucina americana meridionale. Il pollo viene marinato in una miscela di spezie ed erbe aromatiche.',
                'restaurant_id' => 14,
            ],

            [
                'name' => 'Costine St. Louis Fumanti',
                'img_url' => 'https://media.istockphoto.com/id/1221822964/it/foto/lento-arrostito-st-louis-stile-bambino-indietro-costole-di-maiale.jpg?s=1024x1024&w=is&k=20&c=r9q3j4rOk6oxTLmYTLwFxvSv7Egb3ivESr16ynwhADA=',
                'price' => 18.99,
                'ingredients' => 'frizione a secco, salsa barbecue segreta di Big Al',
                'description' => 'Costine di maiale in stile St. Louis',
                'visibility' => true,
                'restaurant_id' => 13,
            ],


            [
                'name' => 'Pollo Fritto alla Southern con Waffle',
                'img_url' => 'https://media.istockphoto.com/id/1325150602/it/foto/cialde-con-pollo-fritto.jpg?s=1024x1024&w=is&k=20&c=ujZ_y2YbnHcXZ7cENgRuhPsPoJOyh_H6rkYPdotxaSM=',
                'price' => 15.99,
                'ingredients' => 'Pollo fritto al latticello, waffle belga, sciroppo d\'acero',
                'visibility' => true,
                'description' => 'Il Pollo Fritto alla Southern con Waffle è un\'abbinata iconica della cucina americana meridionale. Il pollo viene marinato in una miscela di spezie ed erbe aromatiche.',
                'restaurant_id' => 14,
            ],

            [

                'name' => 'La Torta del Peccatore',
                'img_url' => 'https://media.istockphoto.com/id/855118160/it/foto/torta-di-bacche-di-natale.jpg?s=1024x1024&w=is&k=20&c=aKs6awqCFv5-QmPuaUnqUo86rNLX3Scf8bJnIyfTc4U=',
                'price' => 8.99,
                'ingredients' => 'Pan di Spagna al cacao,Mousse al cioccolato fondente,Ganache al caramello salato,Noci pecan pralinate',
                'visibility' => true,
                'description' => 'La torta del peccatore è un dolce paradisiaco che fa sognare al solo guardarlo.',
                'restaurant_id' => 15,

            ],
            [
                'name' => 'Burrito con Pollo e Riso',
                'img_url' => 'https://media.istockphoto.com/id/912134046/it/foto/ciotola-di-burrito-di-pollo-messicano-fatta-in-casa-con-riso-fagioli-mais-pomodoro-avocado.jpg?s=1024x1024&w=is&k=20&c=6bK-ZqsrkBMMFMFfjovYeCXm8vqQVRN-cBh_WDzXofo=',
                'price' => 10.00,
                'ingredients' => 'Tortilla di farina, pollo, riso bianco, fagioli neri, pomodori, lattuga, formaggio cheddar, panna acida, salsa guacamole, salsa pico de gallo',
                'visibility' => true,
                'description' => 'Il Burrito con Pollo e Riso è un\'esplosione di sapori e consistenze che ti catapulterà direttamente in Messico.',
                'restaurant_id' => 17,
            ],

            [
                'name' => 'Fajitas di Manzo con Verdure',
                'img_url' => 'https://media.istockphoto.com/id/1175732553/it/foto/manzo-piccante-verdure-avocado-tortillas-di-mais-fajitas-su-una-padella-su-un-foglio-su-sfondo.jpg?s=1024x1024&w=is&k=20&c=im67woDNNArw7KO3JoqMf1M6l1eyAhrorU0xh6FI60c=',
                'price' => 12.00,
                'ingredients' => 'Manzo, peperoni, cipolle, peperoncino jalapeno, tortillas di mais, spezie per fajitas, olio d\'oliva, sale e pepe',
                'visibility' => true,
                'description' => 'Le Fajitas di Manzo con Verdure sono un tripudio di colori e sapori che ti trasportano in un viaggio culinario nel cuore del Texas.',
                'restaurant_id' => 18,
            ],

            [
                'name' => 'Guacamole con Nachos',
                'img_url' => 'https://media.istockphoto.com/id/1147614546/it/foto/ciotola-di-guacamole-con-patatine-tortilla.jpg?s=1024x1024&w=is&k=20&c=iHKvR9h3S7Q1C78P5yTp66tdFWpkF0Oh7U1U8aMPthA=',
                'price' => 7.00,
                'ingredients' => 'Avocado, pomodori, cipolla, peperoncino jalapeno, coriandolo, lime, olio d\'oliva, sale e pepe, tortilla chips',
                'visibility' => true,
                'description' => 'Il Guacamole con Nachos è un connubio perfetto tra sapori e consistenze che conquista al primo morso.',
                'restaurant_id' => 16,
            ],

            // piatti dei ristoranti aggiunti da berna 
            [
                "name" => "Pollo Tikka Masala",
                "img_url" => "https://example.com/tikka_masala.jpg",
                "price" => 12.50,
                "ingredients" => "Pollo, pomodoro, panna, spezie tikka masala",
                "visibility" => true,
                "description" => "Un piatto classico dell'India settentrionale, il Pollo Tikka Masala è una deliziosa combinazione di pezzi di pollo tenero marinato in una salsa cremosa e speziata a base di pomodoro e panna. Perfetto da accompagnare con del riso basmati caldo.",
                "restaurant_id" => 22
            ],
            [
                "name" => "Paneer Tikka",
                "img_url" => "https://example.com/paneer_tikka.jpg",
                "price" => 10.99,
                "ingredients" => "Paneer, yogurt, spezie tikka, peperoni",
                "visibility" => true,
                "description" => "Il Paneer Tikka è un piatto vegetariano popolare, composto da cubetti di paneer (formaggio indiano) marinati in una miscela di yogurt e spezie aromatiche, quindi grigliati fino a ottenere una consistenza croccante e un sapore irresistibile. Un'ottima scelta per gli amanti del formaggio e dei sapori speziati.",
                "restaurant_id" => 22
            ],
            [
                "name" => "Biryani di Agnello",
                "img_url" => "https://example.com/biryani_agnello.jpg",
                "price" => 14.75,
                "ingredients" => "Agnello, riso basmati, spezie biryani, cipolla fritta",
                "visibility" => true,
                "description" => "Il Biryani di Agnello è un piatto ricco e aromatico, composto da agnello tenero marinato in una miscela di spezie fragranti e cotto lentamente con riso basmati profumato. Un vero e proprio festival di sapori dell'India.",
                "restaurant_id" => 22
            ],
            [
                "name" => "Samosa",
                "img_url" => "https://example.com/samosa.jpg",
                "price" => 7.25,
                "ingredients" => "Patate, piselli, pasta di farina, spezie garam masala",
                "visibility" => true,
                "description" => "Le Samosa sono delle deliziose frittelle ripiene di una miscela speziata di patate, piselli e altre verdure. Croccanti all'esterno e morbide all'interno, sono un piatto iconico della cucina indiana da gustare come antipasto o spuntino.",
                "restaurant_id" => 23
            ],
            [
                "name" => "Palak Paneer",
                "img_url" => "https://example.com/palak_paneer.jpg",
                "price" => 11.50,
                "ingredients" => "Paneer, spinaci, pomodoro, spezie indiane",
                "visibility" => true,
                "description" => "Il Palak Paneer è un piatto vegetariano cremoso e saporito, composto da pezzi di paneer (formaggio indiano) in una salsa di spinaci aromatica. Ricco di ferro e proteine, è una scelta nutriente e deliziosa per tutti.",
                "restaurant_id" => 23
            ],
            [
                "name" => "Chicken Korma",
                "img_url" => "https://example.com/chicken_korma.jpg",
                "price" => 13.99,
                "ingredients" => "Pollo, mandorle, panna, spezie korma",
                "visibility" => true,
                "description" => "Il Chicken Korma è un piatto di pollo ricco e cremoso, preparato con una salsa a base di mandorle, panna e una miscela di spezie aromatiche. Un'esplosione di sapori che delizierà il palato di chiunque.",
                "restaurant_id" => 23
            ],
            [
                "name" => "Dal Tadka",
                "img_url" => "https://example.com/dal_tadka.jpg",
                "price" => 9.75,
                "ingredients" => "Lenticchie gialle, pomodoro, spezie tadka, burro chiarificato",
                "visibility" => true,
                "description" => "Il Dal Tadka è un piatto di lenticchie gialle cotte lentamente e condite con una generosa dose di tadka, una miscela di spezie fritte in burro chiarificato. Semplice ma pieno di sapore, è un accompagnamento perfetto per riso o pane.",
                "restaurant_id" => 24
            ],
            [
                "name" => "Butter Chicken",
                "img_url" => "https://example.com/butter_chicken.jpg",
                "price" => 15.25,
                "ingredients" => "Pollo, pomodoro, panna, burro, spezie masala",
                "visibility" => true,
                "description" => "Il Butter Chicken è un piatto di pollo succoso e tenero, immerso in una salsa cremosa e burrosa aromatizzata con spezie masala. Con il suo sapore ricco e avvolgente, è un piatto che conquisterà il cuore di chiunque.",
                "restaurant_id" => 24
            ],
            [
                "name" => "Naan",
                "img_url" => "https://example.com/naan.jpg",
                "price" => 5.99,
                "ingredients" => "Farina, lievito, yogurt, burro chiarificato",
                "visibility" => true,
                "description" => "Il Naan è un pane soffice e leggermente cotto al forno tandoor, spesso servito caldo e spalmato di burro chiarificato. Con la sua consistenza morbida e il sapore delicato, è un accompagnamento perfetto per qualsiasi pasto indiano.",
                "restaurant_id" => 24
            ],
            [
                "name" => "Mango Lassi",
                "img_url" => "https://example.com/mango_lassi.jpg",
                "price" => 6.50,
                "ingredients" => "Mango, yogurt, zucchero, cardamomo",
                "visibility" => true,
                "description" => "Il Mango Lassi è una bevanda rinfrescante e deliziosa, preparata con mango dolce, yogurt cremoso e una spruzzata di cardamomo aromatico. Perfetto per spegnere la sete e rinfrescare il palato dopo un pasto speziato.",
                "restaurant_id" => 25
            ],
            [
                "name" => "Chana Masala",
                "img_url" => "https://example.com/chana_masala.jpg",
                "price" => 10.50,
                "ingredients" => "Ceci, pomodoro, cipolla, spezie masala",
                "visibility" => true,
                "description" => "Il Chana Masala è un piatto vegetariano dal sapore robusto, preparato con ceci cotti lentamente in una salsa speziata a base di pomodoro e cipolla. Ricco di proteine e fibre, è una scelta salutare e gustosa.",
                "restaurant_id" => 25
            ],
            [
                "name" => "Tandoori Chicken",
                "img_url" => "https://example.com/tandoori_chicken.jpg",
                "price" => 14.25,
                "ingredients" => "Pollo, yogurt, spezie tandoori, succo di limone",
                "visibility" => true,
                "description" => "Il Tandoori Chicken è un classico piatto indiano, composto da pezzi di pollo marinati in una miscela di yogurt e spezie tandoori, quindi cotti in un forno tandoor ardente. Con il suo sapore affumicato e speziato, è un vero piacere per il palato.",
                "restaurant_id" => 25
            ],
            [
                "name" => "Raita",
                "img_url" => "https://example.com/raita.jpg",
                "price" => 5.75,
                "ingredients" => "Yogurt, cetriolo, pomodoro, spezie",
                "visibility" => true,
                "description" => "Il Raita è una salsa rinfrescante a base di yogurt, arricchita con pezzi di cetriolo fresco e pomodoro, e aromatizzata con una miscela di spezie. Ottimo da gustare come accompagnamento per piatti speziati o come salsa per immergere il pane.",
                "restaurant_id" => 26
            ],
            [
                "name" => "Pakora",
                "img_url" => "https://example.com/pakora.jpg",
                "price" => 8.99,
                "ingredients" => "Verdure miste, farina di ceci, spezie, olio per friggere",
                "visibility" => true,
                "description" => "Le Pakora sono delle frittelle indiane croccanti e deliziose, preparate con una miscela di verdure miste, immerse in una pastella a base di farina di ceci e spezie, quindi fritte fino a ottenere una doratura perfetta. Perfette da gustare come antipasto o spuntino.",
                "restaurant_id" => 26
            ],
            [
                "name" => "Murg Makhani (Burro Chicken)",
                "img_url" => "https://example.com/burro_chicken.jpg",
                "price" => 16.50,
                "ingredients" => "Pollo, pomodoro, panna, burro, spezie masala",
                "visibility" => true,
                "description" => "Il Murg Makhani, comunemente noto come Burro Chicken, è un piatto ricco e indulgente, composto da pezzi di pollo tenero in una salsa cremosa a base di pomodoro, panna e burro. Con il suo sapore ricco e avvolgente, è una vera delizia.",
                "restaurant_id" => 27
            ],

            // piatti indiani 

            [
                'name' => 'Pad Thai',
                'img_url' => 'https://example.com/pad_thai.jpg',
                'price' => 10.99,
                'ingredients' => 'Spaghetti di riso, gamberetti, tofu, uova, arachidi, germogli di soia',
                
                'visibility' => true,
                'description' => 'Il Pad Thai è uno dei piatti più iconici della cucina thailandese. È composto da spaghetti di riso saltati in padella con una miscela di ingredienti come gamberetti, tofu, uova, arachidi e germogli di soia, il tutto condito con una salsa a base di tamarindo e spezie.',
                'restaurant_id' => 34,
            ],
            [
                'name' => 'Tom Yum Goong',
                'img_url' => 'https://example.com/tom_yum_goong.jpg',
                'price' => 12.50,
                'ingredients' => 'Gamberi, funghi, erba cipollina, peperoncino, lime',
                
                'visibility' => true,
                'description' => 'La Tom Yum Goong è una zuppa piccante e aspra a base di brodo di gamberi, arricchita con funghi, erba cipollina, peperoncino e lime. È nota per la sua combinazione di sapori freschi, piccanti e acidi, ed è un piatto classico della cucina thailandese.',
                'restaurant_id' => 34,
            ],
            [
                'name' => 'Green Curry',
                'img_url' => 'https://example.com/green_curry.jpg',
                'price' => 14.75,
                'ingredients' => 'Pollo, curry verde, latte di cocco, peperoni, basilico',
                
                'visibility' => true,
                'description' => 'Il Green Curry è un curry piccante e aromatico preparato con pollo, peperoni, foglie di basilico e una miscela di spezie fresche. È cotto in una salsa a base di latte di cocco, che conferisce al piatto una consistenza cremosa e un sapore ricco.',
                'restaurant_id' => 34,
            ],
            [
                'name' => 'Som Tum',
                'img_url' => 'https://example.com/som_tum.jpg',
                'price' => 9.99,
                'ingredients' => 'Papaya verde, pomodori, fagiolini, arachidi, peperoncino',
                
                'visibility' => true,
                'description' => 'La Som Tum, o insalata di papaya verde, è una vivace combinazione di sapori dolci, salati, aspri e piccanti. Preparata con papaya verde grattugiata, pomodori, fagiolini, arachidi e peperoncino, è un piatto fresco e leggero perfetto per i giorni caldi.',
                'restaurant_id' => 35,
            ],
            [
                'name' => 'Massaman Curry',
                'img_url' => 'https://example.com/massaman_curry.jpg',
                'price' => 15.25,
                'ingredients' => 'Manzo, curry massaman, patate, cipolle, arachidi',
                
                'visibility' => true,
                'description' => 'Il Massaman Curry è un curry dal sapore ricco e avvolgente, preparato con carne di manzo tenera, patate, cipolle e arachidi. La sua caratteristica distintiva è la miscela unica di spezie, che includono cannella, chiodi di garofano e cardamomo, che conferiscono al piatto un sapore profondo e complesso.',
                'restaurant_id' => 35,
            ],
            [
                'name' => 'Mango Sticky Rice',
                'img_url' => 'https://example.com/mango_sticky_rice.jpg',
                'price' => 8.50,
                'ingredients' => 'Riso glutinoso, mango maturo, latte di cocco, zucchero',
                
                'visibility' => true,
                'description' => 'Il Mango Sticky Rice è un dessert tradizionale tailandese amato in tutto il mondo. È composto da riso glutinoso cotto al vapore, condito con latte di cocco e zucchero, servito con fette di mango maturo. La combinazione di sapori dolci, cremosi e tropicali lo rende un piatto irresistibile.',
                'restaurant_id' => 35,
            ],
            [
                'name' => 'Pad See Ew',
                'img_url' => 'https://example.com/pad_see_ew.jpg',
                'price' => 11.50,
                'ingredients' => 'Tagliatelle di riso, pollo, broccoli, salsa di soia, uova',
                
                'visibility' => true,
                'description' => 'Il Pad See Ew è un piatto di tagliatelle di riso saltate in padella con pollo, broccoli, salsa di soia e uova. È un piatto semplice ma delizioso, con una combinazione di sapori dolci, salati e leggermente affumicati.',
                'restaurant_id' => 36,
            ],
            [
                'name' => 'Red Curry',
                'img_url' => 'https://example.com/red_curry.jpg',
                'price' => 13.99,
                'ingredients' => 'Gamberetti, curry rosso, latte di cocco, peperoni, basilico',
                
                'visibility' => true,
                'description' => 'Il Red Curry è un curry piccante e cremoso preparato con gamberetti, peperoni, basilico e una miscela di spezie rosse. È cotto in una salsa a base di latte di cocco, che bilancia perfettamente il piccante delle spezie. È un piatto gustoso che soddisfa tutti i palati.',
                'restaurant_id' => 36,
            ],
            [
                'name' => 'Tom Kha Gai',
                'img_url' => 'https://example.com/tom_kha_gai.jpg',
                'price' => 12.75,
                'ingredients' => 'Pollo, funghi, lemongrass, lime, latte di cocco',
                
                'visibility' => true,
                'description' => 'Il Tom Kha Gai è una zuppa di pollo aromatica e cremosa, preparata con funghi, lemongrass, lime e latte di cocco. È una combinazione unica di sapori dolci, piccanti e aspri, che la rende una zuppa deliziosa e confortante perfetta per qualsiasi occasione.',
                'restaurant_id' => 36,
            ],
            [
                'name' => 'Khao Pad',
                'img_url' => 'https://example.com/khao_pad.jpg',
                'price' => 10.25,
                'ingredients' => 'Riso, pollo, uova, cipolle, carote, salsa di soia',
                
                'visibility' => true,
                'description' => 'Il Khao Pad, o riso fritto thailandese, è un piatto semplice ma gustoso preparato con riso, pollo, uova, cipolle, carote e salsa di soia. È un piatto versatile che può essere consumato da solo o accompagnato da altre pietanze thailandesi.',
                'restaurant_id' => 37,
            ],
            [
                'name' => 'Papaya Salad',
                'img_url' => 'https://example.com/papaya_salad.jpg',
                'price' => 9.25,
                'ingredients' => 'Papaya verde, pomodori, fagiolini, arachidi, peperoncino',
                'visibility' => true,
                'description' => 'La Papaya Salad è un\'insalata rinfrescante e piccante preparata con papaya verde, pomodori, fagiolini, arachidi e peperoncino. È una combinazione di sapori vivaci e contrastanti, che la rendono un\'ottima aggiunta a qualsiasi pasto thailandese',
                'restaurant_id' => 37,
            ],
            [
                'name' => 'Phat Si-io',
                'img_url' => 'https://example.com/phat_si_io.jpg',
                'price' => 11.75,
                'ingredients' => 'Tagliatelle di riso, maiale, broccoli, salsa di ostriche, salsa di soia',
                
                'visibility' => true,
                'description' => 'Il Phat Si-io è un piatto di tagliatelle di riso saltate in padella con maiale, broccoli e una salsa ricca di ostriche e salsa di soia. È un piatto saporito e appagante, perfetto per un pranzo veloce o una cena confortante.',
                'restaurant_id' => 37,
            ],
            [
                'name' => 'Gaeng Keow Wan',
                'img_url' => 'https://example.com/gaeng_keow_wan.jpg',
                'price' => 14.50,
                'ingredients' => 'Pollo, curry verde, melanzane, peperoni, basilico',
                
                'visibility' => true,
                'description' => 'Il Gaeng Keow Wan è un curry verde cremoso e speziato preparato con pollo, melanzane, peperoni e basilico. È cotto in una salsa a base di curry verde e latte di cocco, che conferisce al piatto un sapore ricco e avvolgente. È un piatto delizioso che ti farà venire l\'acquolina in bocca.',
                'restaurant_id' => 38,
            ],
            [
                'name' => 'Yam Neua',
                'img_url' => 'https://example.com/yam_neua.jpg',
                'price' => 13.50,
                'ingredients' => 'Bistecca di manzo, pomodori, cipolle, menta, peperoncino',
                'visibility' => true,
                'description' => 'Il Yam Neua è un\'insalata di manzo thailandese fresca e saporita, preparata con bistecca di manzo tagliata a fette sottili, pomodori, cipolle, menta e peperoncino. È condita con una salsa piccante a base di lime, che aggiunge un tocco di acidità e freschezza al piatto.',
                'restaurant_id' => 38,
            ],
            [
                'name' => 'Pad Kee Mao',
                'img_url' => 'https://example.com/pad_kee_mao.jpg',
                'price' => 12.99,
                'ingredients' => 'Tagliatelle di riso, pollo, peperoni, basilico, peperoncino',
                
                'visibility' => true,
                'description' => 'Il Pad Kee Mao è un piatto di tagliatelle di riso saltate in padella con pollo, peperoni, basilico e peperoncino. È un piatto piccante e saporito, perfetto per chi ama i sapori audaci della cucina thailandese.',
                'restaurant_id' => 39,
            ],
            [
                'name' => 'Red Curry',
                'img_url' => 'https://example.com/red_curry.jpg',
                'price' => 13.99,
                'ingredients' => 'Gamberetti, curry rosso, latte di cocco, peperoni, basilico',
                
                'visibility' => true,
                'description' => 'Il Red Curry è un curry piccante e cremoso preparato con gamberetti, peperoni, basilico e una miscela di spezie rosse. È cotto in una salsa a base di latte di cocco, che bilancia perfettamente il piccante delle spezie. È un piatto gustoso che soddisfa tutti i palati.',
                'restaurant_id' => 39,
            ],

            // piatti italiani 

            [
                'name' => 'Spaghetti alla Carbonara',
                'img_url' => 'https://example.com/spaghetti_carbonara.jpg',
                'price' => 12.99,
                'ingredients' => 'Spaghetti, guanciale, uova, pecorino romano, pepe nero',
                'visibility' => true,
                'description' => 'Gli spaghetti alla carbonara sono un classico della cucina romana. La salsa cremosa è fatta con uova, pecorino romano e pepe nero. Il guanciale croccante aggiunge sapore e consistenza a questo piatto iconico.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Pizza Margherita',
                'img_url' => 'https://example.com/pizza_margherita.jpg',
                'price' => 10.50,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, basilico',
                'visibility' => true,
                'description' => 'La pizza Margherita è un simbolo della cucina italiana. La sua semplicità mette in risalto gli ingredienti di qualità: pomodoro fresco, mozzarella di bufala, basilico e olio d\'oliva. Un classico che non delude mai.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Pizza Quattro Stagioni',
                'img_url' => 'https://example.com/pizza_quattro_stagioni.jpg',
                'price' => 11.99,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, funghi, prosciutto cotto, carciofini, olive nere, origano',
                'visibility' => true,
                'description' => 'La Pizza Quattro Stagioni è una deliziosa pizza che rappresenta le quattro stagioni dell\'anno. Divisa in quattro sezioni, è condita con pomodoro, mozzarella, funghi, prosciutto cotto, carciofini e olive nere. Ogni morso offre una combinazione di sapori unici che soddisferanno tutti i gusti.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Pizza Diavola',
                'img_url' => 'https://example.com/pizza_diavola.jpg',
                'price' => 10.75,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, salame piccante, peperoncini, peperoni, olio d\'oliva',
                'visibility' => true,
                'description' => 'La Pizza Diavola è una scelta perfetta per gli amanti del piccante. Condita con pomodoro, mozzarella, salame piccante, peperoncini e peperoni, questa pizza è un esplosione di sapori audaci e intensi. L\'olio d\'oliva aggiunge un tocco di ricchezza e profondità al piatto.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Pizza Capricciosa',
                'img_url' => 'https://example.com/pizza_capricciosa.jpg',
                'price' => 12.50,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, prosciutto cotto, funghi, carciofini, olive nere, origano',
                'visibility' => true,
                'description' => 'La Pizza Capricciosa è una pizza generosamente condita con una varietà di ingredienti. Pomodoro, mozzarella, prosciutto cotto, funghi, carciofini e olive nere si uniscono per creare un piatto gustoso e appagante. La combinazione di sapori e la freschezza degli ingredienti rendono questa pizza una vera delizia.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Pizza Frutti di Mare',
                'img_url' => 'https://example.com/pizza_frutti_di_mare.jpg',
                'price' => 13.99,
                'ingredients' => 'Pizza dough, pomodoro, mozzarella, frutti di mare (calamari, gamberetti, cozze, vongole), aglio, prezzemolo',
                'visibility' => true,
                'description' => 'La Pizza Frutti di Mare è una delizia per gli amanti del mare. Condita con pomodoro, mozzarella e una varietà di frutti di mare tra cui calamari, gamberetti, cozze e vongole, questa pizza offre un sapore fresco e marino. L\'aglio e il prezzemolo aggiungono un tocco aromatico che completa il piatto.',
                'restaurant_id' => 29,
            ],
            [
                'name' => 'Risotto ai Funghi Porcini',
                'img_url' => 'https://example.com/risotto_funghi.jpg',
                'price' => 14.75,
                'ingredients' => 'Riso Carnaroli, funghi porcini, cipolla, brodo di carne, prezzemolo',
                'visibility' => true,
                'description' => 'Il risotto ai funghi porcini è un piatto cremoso e avvolgente, arricchito dal sapore deciso dei funghi porcini. Preparato con riso Carnaroli, cipolla, brodo di carne e prezzemolo, è un comfort food perfetto per le serate autunnali.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Lasagne alla Bolognese',
                'img_url' => 'https://example.com/lasagne_bolognese.jpg',
                'price' => 16.99,
                'ingredients' => 'Fogli di pasta all\'uovo, ragù alla bolognese, besciamella, parmigiano reggiano',
                'visibility' => true,
                'description' => 'Le lasagne alla bolognese sono un piatto ricco e soddisfacente. Strati di pasta all\'uovo si alternano con ragù alla bolognese, besciamella e parmigiano reggiano. Il risultato è un piatto sfizioso che conquista tutti i palati.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Filetto di Manzo al Pepe Verde',
                'img_url' => 'https://example.com/filetto_di_manzo_pepe_verde.jpg',
                'price' => 19.99,
                'ingredients' => 'Filetto di manzo, pepe verde, burro, panna, brandy, sale, pepe',
                'visibility' => true,
                'description' => 'Il Filetto di Manzo al Pepe Verde è un piatto classico della cucina italiana. Il tenero filetto di manzo è cotto alla perfezione e servito con una salsa cremosa al pepe verde, preparata con burro, panna e brandy. Il risultato è un piatto ricco e saporito che conquista ogni palato.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Saltimbocca alla Romana',
                'img_url' => 'https://example.com/saltimbocca_alla_romana.jpg',
                'price' => 16.50,
                'ingredients' => 'Fettine di vitello, prosciutto crudo, salvia, burro, vino bianco secco, sale, pepe',
                'visibility' => true,
                'description' => 'Lo Saltimbocca alla Romana è un piatto tradizionale romano che delizia i sensi con i suoi sapori intensi. Le fettine di vitello sono avvolte con prosciutto crudo e foglie di salvia, quindi saltate in padella con burro e vino bianco secco. Il risultato è un piatto succulento e pieno di gusto.',
                'restaurant_id' => 28,
            ],
            [
                'name' => 'Ossobuco alla Milanese',
                'img_url' => 'https://example.com/ossobuco_milanese.jpg',
                'price' => 22.50,
                'ingredients' => 'Fette di ossobuco, vino bianco, brodo di carne, cipolla, sedano, carota, prezzemolo',
                'visibility' => true,
                'description' => 'L\'ossobuco alla milanese è un piatto tradizionale della cucina lombarda. Le fette di ossobuco vengono brasate lentamente in un sugo aromatico fatto con vino bianco, brodo di carne e verdure. Il risultato è una carne tenera e saporita, perfetta da gustare con un contorno di risotto allo zafferano.',
                'restaurant_id' => 30,
            ],
            [
                'name' => 'Tiramisù',
                'img_url' => 'https://example.com/tiramisu.jpg',
                'price' => 8.99,
                'ingredients' => 'Savoiardi, caffè espresso, mascarpone, uova, cacao in polvere',
                
                'visibility' => true,
                'description' => 'Il tiramisù è un dessert italiano amato in tutto il mondo. Strati di biscotti savoiardi inzuppati nel caffè vengono alternati con una crema di mascarpone leggera e soffice. Una spolverata di cacao in polvere completa questo dolce decadente e irresistibile.',
                'restaurant_id' => 30,
            ],
            [
                'name' => 'Ravioli al Tartufo',
                'img_url' => 'https://example.com/ravioli_tartufo.jpg',
                'price' => 18.50,
                'ingredients' => 'Ravioli ripieni di ricotta e spinaci, burro, tartufo nero',
                'visibility' => true,
                'description' => 'I ravioli al tartufo sono un piatto raffinato e lussuoso. I ravioli ripieni di ricotta e spinaci vengono conditi con una salsa al burro e tartufo nero appena grattugiato. Ogni morso è un\'esplosione di sapori terrosi e burrosi.',
                'restaurant_id' => 30,
            ],
            [
                'name' => 'Bruschetta al Pomodoro',
                'img_url' => 'https://example.com/bruschetta_pomodoro.jpg',
                'price' => 7.25,
                'ingredients' => 'Pane casereccio, pomodori maturi, aglio, basilico, olio d\'oliva',
                'visibility' => true,
                'description' => 'La bruschetta al pomodoro è un antipasto semplice ma gustoso. Fette di pane casereccio vengono grigliate e poi strofinate con aglio fresco. I pomodori maturi vengono tagliati a cubetti e conditi con basilico, olio d\'oliva, sale e pepe, per creare un antipasto fresco e saporito.',
                'restaurant_id' => 31,
            ],
            [
                'name' => 'Saltimbocca alla Romana',
                'img_url' => 'https://example.com/saltimbocca_romana.jpg',
                'price' => 20.75,
                'ingredients' => 'Fette di vitello, prosciutto crudo, salvia, vino bianco, burro',
                'visibility' => true,
                'description' => 'Lo saltimbocca alla romana è un piatto succulento e aromatico. Le fette di vitello vengono avvolte in prosciutto crudo e aromatizzate con foglie di salvia. Vengono poi brasate in padella con vino bianco e burro, fino a diventare tenere e saporite.',
                'restaurant_id' => 31,
            ],
            [
                'name' => 'Caprese Salad',
                'img_url' => 'https://example.com/caprese_salad.jpg',
                'price' => 9.50,
                'ingredients' => 'Pomodori maturi, mozzarella di bufala, basilico, olio d\'oliva, sale, pepe',
                'visibility' => true,
                'description' => 'La Caprese Salad è un\'insalata fresca e colorata, perfetta per l\'estate. Pomodori maturi e mozzarella di bufala vengono alternati con foglie di basilico fresco. Condita con olio d\'oliva, sale e pepe, è un\'esplosione di sapori mediterranei.',
                'restaurant_id' => 32,
            ],
            [
                'name' => 'Gnocchi al Gorgonzola',
                'img_url' => 'https://example.com/gnocchi_gorgonzola.jpg',
                'price' => 15.99,
                'ingredients' => 'Gnocchi di patate, gorgonzola, panna, noci',
                'visibility' => true,
                'description' => 'Gli gnocchi al gorgonzola sono un piatto cremoso e avvolgente. Gli gnocchi di patate vengono conditi con una salsa di gorgonzola e panna, e poi spolverati con noci tritate per un tocco croccante. È un piatto confortante che conquista tutti i palati.',
                'restaurant_id' => 32,
            ],
            [
                'name' => 'Tortellini in Brodo',
                'img_url' => 'https://example.com/tortellini_brodo.jpg',
                'price' => 12.25,
                'ingredients' => 'Tortellini di carne, brodo di pollo, prezzemolo',
                'visibility' => true,
                'description' => 'I tortellini in brodo sono un comfort food classico della cucina emiliana. I tortellini di carne vengono cotti in un brodo di pollo ricco e aromatico, fino a diventare teneri e saporiti. Guarniti con prezzemolo fresco tritato, sono perfetti per scaldarsi nelle fredde giornate invernali.',
                'restaurant_id' => 32,
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
