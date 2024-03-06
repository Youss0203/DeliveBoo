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
        $restaurants = [
            [
                'company_name' => 'Sakura Sushi Bar',
                'address' => 'Corso Buenos Aires, 256 - Milano',
                'vat_no' => 78635672,
                'img_url' => 'https://media.istockphoto.com/id/157577306/it/foto/interni-del-ristorante-di-sushi-fusion.jpg?s=612x612&w=0&k=20&c=n5OlA2-D8GhtOv4KH6zXyiNXDhNOkle2wf1UxCixEL4=',
                'user_id' => 1,
            ],
            [
                'company_name' => 'Masuki Izakaya',
                'address' => 'Via Montenapoleone, 2 - Milano',
                'vat_no' => 53627598,
                'img_url' => 'https://media.istockphoto.com/id/175411278/it/foto/cena-al-ristorante-cinese.jpg?s=612x612&w=0&k=20&c=jpojcyiOTE2uIoZJj5hHDgEunbLTHH7pc3ybtkZ3ahc=',
                'user_id' => 2,
            ],
            [

                'company_name' => 'Matsuri Izakaya',
                'address' => 'Corso Como, 72 - Milano',
                'vat_no' => 76384753,
                'img_url' => 'https://media.istockphoto.com/id/1125855196/it/foto/una-donna-che-mangia-cibo-fusion-asiatico-in-un-ristorante.jpg?s=612x612&w=0&k=20&c=agIhHKxFbeGSXlZOt02GOBtztzd0PDDSTYp2fIyMobg=',
                'user_id' => 3,
            ],
            [
                'company_name' => 'Afro Delight',
                'address' => 'Via Torino, 3 - Milano',
                'vat_no' => 92836283,
                'img_url' => 'https://media.istockphoto.com/id/1405176501/it/foto/souq-waqif-doha-qatar.jpg?s=612x612&w=0&k=20&c=Wl3mss_Q3HJ3PT9rln0mJhU2-rQ88KCeJu9ihvqBdkU=',
                'user_id' => 4,
            ],
            [
                'company_name' => 'Safari Kitchen',
                'address' => 'Via IV novembre, 35 - Milano',
                'vat_no' => 648392738,
                'img_url' => 'https://media.istockphoto.com/id/1130668675/it/foto/nuovissimo-ristorante-gourmet-italiano.jpg?s=612x612&w=0&k=20&c=w032QDN8_WPD7PB9XjeEBAiKy5D02gsyaY_pNkvXdpo=',
                'user_id' => 5,

            ],
            [
                'company_name' => 'Taste of Africa',
                'address' => 'Via A. Moro, 84 - Milano',
                'vat_no' => 35467829,
                'img_url' => 'https://media.istockphoto.com/id/1130751052/it/foto/un-allestimento-interno-ristorante-italiano.jpg?s=612x612&w=0&k=20&c=pi5kjVSAnBMC3kHRWe2AoxjMZ8zPhvUK75uATBULUhM=',
                'user_id' => 6,
            ],
            [
                'company_name' => 'El Gato',
                'address' => 'Via Alessandro Volta, 18- Milano',
                'vat_no' => 36738394,
                'img_url' => 'https://media.istockphoto.com/id/628096410/it/foto/scorcio-dellandalusia.jpg?s=612x612&w=0&k=20&c=kvNgAfYecSi8PJo0SndgDAQvZNJaDKMDvMLFn38L_Mk=',
                'user_id' => 7,
            ],

            [
                'company_name' => 'La Piemontesa',
                'address' => ' Via Ruggero Boscovich, 57, - Milano',
                'vat_no' => 73652934,
                'img_url' => 'https://media.istockphoto.com/id/1286692956/it/foto/interno-del-caffè-vuoto-con-sedie-e-tavoli.jpg?s=612x612&w=0&k=20&c=hXWUhmIf2WKIL8vJ-34cuilTT4tjinfktRXenPFHORM=',
                'user_id' => 8,
            ],

            [
                'company_name' => 'Lateral',
                'address' => 'Via Palestro, 16 - Milano',
                'vat_no' => 78394829,
                'img_url' => 'https://media.istockphoto.com/id/458602929/it/foto/spagnoli-tradizionali-bar-di-siviglia.jpg?s=612x612&w=0&k=20&c=NU3taJONXa27aGvk9FxwrEvqkb6Ltv-pBF6M9vejMRM=',
                'user_id' => 9,
            ],
            [
                'company_name' => 'Arirang',
                'address' => 'Via Sardegna, 29 - Milano',
                'vat_no' => 34568748,
                'img_url' => 'hhttps://media.istockphoto.com/id/1344930008/it/foto/ristorante-a-pyongyang-corea-del-nord.jpg?s=612x612&w=0&k=20&c=IGQNuu5f1ySVF8hko-RVyDDijusaGo1H8cPq7yP1DqI=',
                'user_id' => 10,
            ],
            [
                'company_name' => 'Buk Chang Dong',
                'address' => 'Via Paolo Sarpi, 15 - Milano',
                'vat_no' => 73848293,
                'img_url' => 'https://media.istockphoto.com/id/1409309302/it/foto/fiori-decorativi-in-uno-stato-danimo-atmosferico-scuro-ristorante-asiatico-schema-di-interior.jpg?s=612x612&w=0&k=20&c=-moDsFgL8-0vtcZKcjOgmlpfkY9jOLeHzA1hhF_xyn4=',
                'user_id' => 11,
            ],
            [
                'company_name' => 'Korea House',
                'address' => 'Via Lomazzo, 31 - Milano',
                'vat_no' => 84940834,
                'img_url' => 'https://media.istockphoto.com/id/1021577774/it/foto/mensa-del-mercato-del-pesce-di-jagalchi.jpg?s=612x612&w=0&k=20&c=6mcc_W6LJTibzkjhHbjpMFGAI1uRLV15aBbK2-7BVvA=',
                'user_id' => 12,
            ],
            [
                'company_name' => 'Ristorante Nuovo Oriente',
                'address' => 'Via Roma, 123 - Milano ',
                'vat_no' => 87234651,
                'img_url' => 'https://media.istockphoto.com/id/907599852/it/foto/ambiente-ristorante-tradizionale-cinese.jpg?s=612x612&w=0&k=20&c=Kh30Y8IWZMULCxtpIzJbz0cI9iVsHQRRKpCdSIn5EYQ=',
                'user_id' => 13,
            ],

            [
                'company_name' => 'Lanterna Rossa',
                'address' => 'Via Garibaldi, 45 - Milano',
                'vat_no' => 17254256,
                'img_url' => 'https://media.istockphoto.com/id/636542084/it/foto/ambiente-ristorante-tradizionale-in-alacarte-cinese.jpg?s=612x612&w=0&k=20&c=m1D7NsAp5CA5T6lf_BKvwqAjXP6s-Zg8B0gy33rP_OI=',
                'user_id' => 14,
            ],

            [
                'company_name' => 'Giardino Di Giada',
                'address' => 'Via Cavour, 78 - Milano',
                'vat_no' => 003234252,
                'img_url' => 'https://media.istockphoto.com/id/92222813/it/foto/ristorante.jpg?s=612x612&w=0&k=20&c=dcrz095P6bkmo-OWE_e34Rblzaih4_7swgjNpR2gItg=',
                'user_id' => 15,
            ],
            [
                'company_name' => 'Big Al\'s BBQ',
                'address' => 'Via Larga, 45 - Milano',
                'vat_no' => 43268901,
                'img_url' => 'https://media.istockphoto.com/id/1056361994/it/foto/spiaggia-di-kamari-sullisola-di-santorini-grecia.jpg?s=1024x1024&w=is&k=20&c=PQuoD-0qkSylm1rUXrBhWvU8pkavECo2kudHguNtgG4=',
                'user_id' => 16,
            ],

            [
                'company_name' => 'Sally \'s Southern Kitchen',
                'address' => 'Via Alberico Albricci, 67 - Milano',
                'vat_no' => 12345558,
                'img_url' => 'https://media.istockphoto.com/id/1312094858/it/foto/barbecue-nel-ristorante-di-mercado-del-puerto-a-montevideo-uruguay.jpg?s=1024x1024&w=is&k=20&c=ENibQuhFWiazxjT5v3qiLlZV0msKqHY8eZ1YzRsya5E=',
                'user_id' => 17,
            ],

            [
                'company_name' => 'The Rusty Fork',
                'address' => 'Via Chiaravalle, 35 - Milano',
                'vat_no' => '47658901',
                'img_url' => 'https://media.istockphoto.com/id/1095019510/it/foto/bistecche-di-maiale-alla-griglia-su-pietra-con-bottiglia-di-vino-bicchiere-di-vino-coltello-e.jpg?s=1024x1024&w=is&k=20&c=5Emk9BiYOc2ivCWy9pJZEk5GuwLu3-1FGfg0jl57CLo=',
                'user_id' => 18,

            ],

            [
                'company_name' => 'Mexi-Caliente',
                'address' => 'Via del Sol, 12 - Milano',
                'vat_no' => '98765432',
                'img_url' => 'https://media.istockphoto.com/id/827604704/it/foto/ristorante-in-piazza-bugibba-malta.jpg?s=612x612&w=is&k=20&c=l0-gJ7USXWbXmbB44z9U6XLEqreaAZ55MbYWRWfA9eg=',
                'user_id' => 19,

            ],

            [
                'company_name' =>  'El Sombrero',
                'address' =>  'Via del Pueblo, 3 - Milano',
                'vat_no' => 34567890,
                'img_url' => 'https://media.istockphoto.com/id/540740038/it/foto/sorridente-cameriera-e-gli-ospiti-al-tavolo.jpg?s=1024x1024&w=is&k=20&c=nFbfHINZJBNyWrMxyfQgXtnKE72RMYE0kod8wc_83WU=',
                'user_id' => 20,

            ],

            [
                'company_name' => 'Fiesta Mexicana',
                'address' => 'Via del Sol, 10 - Milano',
                'vat_no' => 45678901,
                'img_url' => 'https://media.istockphoto.com/id/1169771473/it/foto/amici-del-gruppo-asiatico-che-cenano-a-casa-sono-felici-di-parlare.jpg?s=1024x1024&w=is&k=20&c=Qk67wkIBrU1PzsAl3o_m4mFGO5YPulo3u0ptzD0bWsA=',
                'user_id' => 21,
            ],
            // ristoranti indiani
            [
                'company_name' => 'Indiano Aroma',
                'address' => 'Via Bologna, 15, 20100 Milano',
                'vat_no' => 98765432,
                'img_url' => 'https://media.istockphoto.com/id/1131393938/it/foto/ristorante-gourmet-indiano-molto-elegante.jpg?s=612x612&w=0&k=20&c=j5O2_QyLubjGKsElKwt-8RDG2QmgE_eBx7uSFPi1WWI=',
                'user_id' => 22,
            ],
            [
                'company_name' => 'Delhi Bazar',
                'address' => 'Corso Venezia, 48, 20121 Milano',
                'vat_no' => 87654321,
                'img_url' => 'https://media.istockphoto.com/id/1162729319/it/foto/interno-di-un-raffinato-ristorante-indiano.jpg?s=612x612&w=0&k=20&c=BXXT4g8wKINqq6tjYJ7tQ8VQ0LIJ0fjGC2Mmyz40EaM=',
                'user_id' => 23,
            ],
            [
                'company_name' => 'Mumbai Milano',
                'address' => 'Via Marghera, 12, 20149 Milano',
                'vat_no' => 76543219,
                'img_url' => 'https://media.istockphoto.com/id/183582435/it/foto/5-stelle-di-pakistani-ristorante-con-cucina-indiana-desi-ambianc.jpg?s=612x612&w=0&k=20&c=g4ZGYbqcVCcmvkMnjgHjsZn5jdQBBwRje7GHOTY2UC0=',
                'user_id' => 24,
            ],
            [
                'company_name' => 'Raj Palace',
                'address' => 'Viale Monza, 140, 20125 Milano',
                'vat_no' => 65432198,
                'img_url' => 'https://media.istockphoto.com/id/157533612/it/foto/palazzo-indiano.jpg?s=612x612&w=0&k=20&c=lzevgmDm4jWVXq6mm5moyxx1oy3gcO-kvDwEnAseTm0=',
                'user_id' => 25,
            ],
            [
                'company_name' => 'Kashmir Kitchen',
                'address' => 'Piazza Firenze, 35, 20154 Milano',
                'vat_no' => 54321987,
                'img_url' => 'https://media.istockphoto.com/id/183582435/it/foto/5-stelle-di-pakistani-ristorante-con-cucina-indiana-desi-ambianc.jpg?s=612x612&w=0&k=20&c=g4ZGYbqcVCcmvkMnjgHjsZn5jdQBBwRje7GHOTY2UC0=',
                'user_id' => 26,
            ],
            [
                'company_name' => 'Spice of India',
                'address' => 'Via Tortona, 32, 20144 Milano',
                'vat_no' => 43219876,
                'img_url' => 'url_immagine6.jpg',
                'user_id' => 27,
            ],
            // risto. italiani

            [
                'company_name' => 'La Dolce Vita Ristorante',
                'address' => 'Via Luce, 45, 20100 Milano',
                'vat_no' => 98765432,
                'img_url' => 'https://media.istockphoto.com/id/473233895/it/video/ristorante-in-vecchio-città-italiana.jpg?s=640x640&k=20&c=UJ9AQQB3dbHz521p8VnSqjOWUOkrFsdEcJQ-v5lvCmk=',
                'user_id' => 28,
            ],
            [
                'company_name' => 'Pizzeria Da Marco',
                'address' => 'Corso Italia, 22, 20121 Milano',
                'vat_no' => 87654321,
                'img_url' => 'https://media.istockphoto.com/id/1320578223/it/foto/vista-dellaffollato-quartiere-del-naviglio-grande-a-milano.jpg?s=612x612&w=0&k=20&c=Nb5IgQe2DLDYvV7HFHn09rMypuD1IzKoHSvlyai3Psg=',
                'user_id' => 29,
            ],
            [
                'company_name' => 'Osteria Del Borgo',
                'address' => 'Piazza Duomo, 11, 20122 Milano',
                'vat_no' => 76543219,
                'img_url' => 'https://media.istockphoto.com/id/1130668675/it/foto/nuovissimo-ristorante-gourmet-italiano.jpg?s=612x612&w=0&k=20&c=w032QDN8_WPD7PB9XjeEBAiKy5D02gsyaY_pNkvXdpo=',
                'user_id' => 30,
            ],
            [
                'company_name' => 'Trattoria Al Gondoliere',
                'address' => 'Via Navigli, 34, 20123 Milano',
                'vat_no' => 65432198,
                'img_url' => 'https://media.istockphoto.com/id/183410583/it/foto/ristorante-di-lusso.jpg?s=612x612&w=0&k=20&c=9VgwqYDY13yqz6jMj4Ib22EtXdkmQcmCWlNKluNBvDE=',
                'user_id' => 31,
            ],
            [
                'company_name' => 'Il Vecchio Forno',
                'address' => 'Via Vecchia, 56, 20124 Milano',
                'vat_no' => 54321987,
                'img_url' => 'https://media.istockphoto.com/id/1210607926/it/foto/un-ristorante-completamente-vuoto-nel-centro-di-roma-a-causa-della-crisi-sanitaria-covid-19.jpg?s=612x612&w=0&k=20&c=Tm7KWoJd2SnIbiZ-J-KzY3VvP9eQmUbX8oDTYcvprbA=',
                'user_id' => 32,
            ],
            [
                'company_name' => 'Ristorante Mediterraneo',
                'address' => 'Via Mare, 78, 20125 Milano',
                'vat_no' => 43219876,
                'img_url' => 'https://media.istockphoto.com/id/183410583/it/foto/ristorante-di-lusso.jpg?s=612x612&w=0&k=20&c=9VgwqYDY13yqz6jMj4Ib22EtXdkmQcmCWlNKluNBvDE=',
                'user_id' => 33,
            ],
            // ristoranti thai 
            [
                'company_name' => 'Thai Aroma',
                'address' => 'Via Milano, 10, 20100 Milano',
                'vat_no' => 12345678,
                'img_url' => 'https://media.istockphoto.com/id/183828804/it/foto/ristorante-dellhotel-phuket.jpg?s=612x612&w=0&k=20&c=iZ1bnAP1JLQTsYscAaaYSCyjdEgTSs1AqadLFxI_FO8=',
                'user_id' => 34,
            ],
            [
                'company_name' => 'Bangkok Milano',
                'address' => 'Corso Buenos Aires, 90, 20124 Milano',
                'vat_no' => '23456789',
                'img_url' => 'https://media.istockphoto.com/id/1001851616/it/foto/immagine-sfocata-astratta-del-festival-notturno-in-un-ristorante-e-latmosfera-è-felice-e.jpg?s=612x612&w=0&k=20&c=37bEom-WeJBaPBdTr2hLNAWVUsFUTWsVkKeXXBeydUQ=',
                'user_id' => 35,
            ],
            [
                'company_name' => 'Lotus Thai',
                'address' => 'Via Marghera, 33, 20149 Milano',
                'vat_no' => '34567890',
                'img_url' => 'https://media.istockphoto.com/id/510659463/it/foto/mangiare-cibo-thailandese-a-khao-san-road-bangkok-tailandia.jpg?s=612x612&w=0&k=20&c=xOo8dwYgj1nqN28UHKzPZIngo61CTDvBlY9ps4jSRYo=',
                'user_id' => 36,
            ],
            [
                'company_name' => 'Cielo Thai',
                'address' => 'Viale Monza, 120, 20125 Milano',
                'vat_no' => '45678901',
                'img_url' => 'https://media.istockphoto.com/id/1287411694/it/foto/chef-che-cucina-cibo-al-ristorante-sul-lato-della-strada-in-yaowarat-road-bangkok.jpg?s=612x612&w=0&k=20&c=HR1xNMr5nNq7nxL-IW_X2Z3K3jx1Di2E2dvnelWhceo=',
                'user_id' => 37,
            ],
            [
                'company_name' => 'Lemongrass Milano',
                'address' => 'Piazza Napoli, 42, 20146 Milano',
                'vat_no' => '56789012',
                'img_url' => 'https://media.istockphoto.com/id/488572323/it/foto/bella-scena-notturna-della-thailandia.jpg?s=612x612&w=0&k=20&c=7KfyeovBg3UfdExQObo86bXpqssuUQ4D78zj4RuWk1A=',
                'user_id' => 38,
            ],
            [
                'company_name' => 'Thai Silk',
                'address' => 'Via Tortona, 27, 20144 Milano',
                'vat_no' => '67890123',
                'img_url' => 'https://media.istockphoto.com/id/1198944261/it/foto/è-un-piacere-essere-di-servizio-foto-darchivio.jpg?s=612x612&w=0&k=20&c=B_yR_8WntPdyheE_NmmMRSvMqt2wBskbKBSrwJes4sU=',
                'user_id' => 39,
            ],

        ];

        foreach ($restaurants as $restaurant) {
            $newRestaurant = new Restaurant();

            $newRestaurant->company_name = $restaurant['company_name'];
            $newRestaurant->img_url = $restaurant['img_url'];
            $newRestaurant->address = $restaurant['address'];
            $newRestaurant->vat_no = $restaurant['vat_no'];
            $newRestaurant->user_id = $restaurant['user_id'];
            $newRestaurant->save();
        }
    }
}
