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
        [
            'company_name' => 'Afro Delight',
            'address' => 'Via Torino, 3 - Milano',
            'vat_no' => 92836283,
            'img_url'=>'https://media.istockphoto.com/id/1405176501/it/foto/souq-waqif-doha-qatar.jpg?s=612x612&w=0&k=20&c=Wl3mss_Q3HJ3PT9rln0mJhU2-rQ88KCeJu9ihvqBdkU=',
        ],
        [
            'company_name' => 'Safari Kitchen',
            'address' => 'Via IV novembre, 35 - Milano',
            'vat_no' => 648392738,
            'img_url'=>'https://media.istockphoto.com/id/1130668675/it/foto/nuovissimo-ristorante-gourmet-italiano.jpg?s=612x612&w=0&k=20&c=w032QDN8_WPD7PB9XjeEBAiKy5D02gsyaY_pNkvXdpo=',
            
        ],
        [
            'company_name' => 'Taste of Africa',
            'address' => 'Via A. Moro, 84 - Milano',
            'vat_no' => 35467829,
            'img_url'=>'https://media.istockphoto.com/id/1130751052/it/foto/un-allestimento-interno-ristorante-italiano.jpg?s=612x612&w=0&k=20&c=pi5kjVSAnBMC3kHRWe2AoxjMZ8zPhvUK75uATBULUhM=',
        ],
        [ 
            'company_name' => 'El Gato',
            'address' => 'Via Alessandro Volta, 18- Milano',
            'vat_no' =>36738394,
            'img_url'=>'https://media.istockphoto.com/id/628096410/it/foto/scorcio-dellandalusia.jpg?s=612x612&w=0&k=20&c=kvNgAfYecSi8PJo0SndgDAQvZNJaDKMDvMLFn38L_Mk=',
        ],
    
        [ 
            'company_name' => 'La Piemontesa',
            'address' => ' Via Ruggero Boscovich, 57, - Milano',
            'vat_no' => 73652934,
            'img_url'=>'https://media.istockphoto.com/id/1286692956/it/foto/interno-del-caffè-vuoto-con-sedie-e-tavoli.jpg?s=612x612&w=0&k=20&c=hXWUhmIf2WKIL8vJ-34cuilTT4tjinfktRXenPFHORM=',
        ],
    
        [ 
            'company_name' => 'Lateral',
            'address' => 'Via Palestro, 16 - Milano',
            'vat_no' =>78394829,
            'img_url'=>'https://media.istockphoto.com/id/458602929/it/foto/spagnoli-tradizionali-bar-di-siviglia.jpg?s=612x612&w=0&k=20&c=NU3taJONXa27aGvk9FxwrEvqkb6Ltv-pBF6M9vejMRM=',
        ],
        [ 
            'company_name' => 'Arirang',
            'address' => 'Via Sardegna, 29 - Milano',
            'vat_no' =>34568748,
            'img_url'=>'hhttps://media.istockphoto.com/id/1344930008/it/foto/ristorante-a-pyongyang-corea-del-nord.jpg?s=612x612&w=0&k=20&c=IGQNuu5f1ySVF8hko-RVyDDijusaGo1H8cPq7yP1DqI=',
        ],
        [ 
            'company_name' => 'Buk Chang Dong',
            'address' => 'Via Paolo Sarpi, 15 - Milano',
            'vat_no' => 73848293,
            'img_url'=>'https://media.istockphoto.com/id/1409309302/it/foto/fiori-decorativi-in-uno-stato-danimo-atmosferico-scuro-ristorante-asiatico-schema-di-interior.jpg?s=612x612&w=0&k=20&c=-moDsFgL8-0vtcZKcjOgmlpfkY9jOLeHzA1hhF_xyn4=',
        ],    
        [ 
            'company_name' => 'Korea House',
            'address' => 'Via Lomazzo, 31 - Milano',
            'vat_no' =>84940834,
            'img_url'=>'https://media.istockphoto.com/id/1021577774/it/foto/mensa-del-mercato-del-pesce-di-jagalchi.jpg?s=612x612&w=0&k=20&c=6mcc_W6LJTibzkjhHbjpMFGAI1uRLV15aBbK2-7BVvA=',
        ],
        [
            'company_name' => 'Ristorante Nuovo Oriente',
            'address' => 'Via Roma, 123 - Milano ',
            'vat_no' => 87234651,
            'img_url'=>'https://media.istockphoto.com/id/907599852/it/foto/ambiente-ristorante-tradizionale-cinese.jpg?s=612x612&w=0&k=20&c=Kh30Y8IWZMULCxtpIzJbz0cI9iVsHQRRKpCdSIn5EYQ=',
        ],
            
        [
            'company_name' => 'Lanterna Rossa',
            'address' => 'Via Garibaldi, 45 - Milano',
            'vat_no' => 17254256,
            'img_url'=>'https://media.istockphoto.com/id/636542084/it/foto/ambiente-ristorante-tradizionale-in-alacarte-cinese.jpg?s=612x612&w=0&k=20&c=m1D7NsAp5CA5T6lf_BKvwqAjXP6s-Zg8B0gy33rP_OI=',
        ],
            
        [
            'company_name' => 'Giardino Di Giada',
            'address' => 'Via Cavour, 78 - Milano',
            'vat_no' => 003234252,
            'img_url'=>'https://media.istockphoto.com/id/92222813/it/foto/ristorante.jpg?s=612x612&w=0&k=20&c=dcrz095P6bkmo-OWE_e34Rblzaih4_7swgjNpR2gItg=',
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
