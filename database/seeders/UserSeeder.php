<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'sakura@gmail.com',
                'password' => 'sakura123',
                'name' => 'sakura',
                'last_name' => 'sushi',
            ],
            [
                'email' => 'masuki@gmail.com',
                'password' => 'masuki123',
                'name' => 'masuki',
                'last_name' => 'izaka',
            ],
            [
                'email' => 'matsuri@gmail.com',
                'password' => 'matsuri123',
                'name' => 'matsuri',
                'last_name' => 'kaya',
            ],
            [
                'email' => 'afro@gmail.com',
                'password' => 'afro123',
                'name' => 'afro',
                'last_name' => 'delight',
            ],
            [
                'email' => 'safari@gmail.com',
                'password' => 'safari123',
                'name' => 'safari',
                'last_name' => 'gino',
            ],
            [
                'email' => 'tast@gmail.com',
                'password' => 'taste123',
                'name' => 'taste',
                'last_name' => 'africa',
            ],
            [
                'email' => 'elgato@gmail.com',
                'password' => 'elgato123',
                'name' => 'el gato',
                'last_name' => 'loco',
            ],
            [
                'email' => 'piemontesa@gmail.com',
                'password' => 'piemontesa',
                'name' => 'piemontesa',
                'last_name' => 'chica',
            ],
            [
                'email' => 'lateral@gmail.com',
                'password' => 'lateral123',
                'name' => 'lateral',
                'last_name' => 'rossi',
            ],
            [
                'email' => 'arirang@gmail.com',
                'password' => 'arirang123',
                'name' => 'arirang',
                'last_name' => 'chong',
            ],
            [
                'email' => 'buk@gmail.com',
                'password' => 'buk123',
                'name' => 'buk',
                'last_name' => 'chang',
            ],
            [
                'email' => 'korea@gmail.com',
                'password' => 'korea123',
                'name' => 'korea',
                'last_name' => 'house',
            ],
            [
                'email' => 'orient@gmail.com',
                'password' => 'oriente123',
                'name' => 'oriente',
                'last_name' => 'kim',
            ],
            [
                'email' => 'lanterna@gmail.com',
                'password' => 'lanterna123',
                'name' => 'lanterna',
                'last_name' => 'rossa',
            ],
            [
                'email' => 'giada@gmail.com',
                'password' => 'giada123',
                'name' => 'giada',
                'last_name' => 'giardino',
            ],
            [
                'email' => 'bigal@gmail.com',
                'password' => 'big123',
                'name' => 'big',
                'last_name' => 'small',
            ],
            [
                'email' => 'sally@gmail.com',
                'password' => 'sally123',
                'name' => 'sally',
                'last_name' => 'south',
            ],
            [
                'email' => 'rusty@gmail.com',
                'password' => 'rusty123',
                'name' => 'rusty',
                'last_name' => 'dusty',
            ],
            [
                'email' => 'mexi@gmail.com',
                'password' => 'mexi123',
                'name' => 'mexi',
                'last_name' => 'can',
            ],
            [
                'email' => 'sombrero@gmail.com',
                'password' => 'sombrero123',
                'name' => 'sombrero',
                'last_name' => 'baffo',
            ],
            [
                'email' => 'fiesta@gmail.com',
                'password' => 'fiesta123',
                'name' => 'fiesta',
                'last_name' => 'roja',
            ],
            [
                'email' => 'aroma@gmail.com',
                'password' => 'aroma123',
                'name' => 'aroma',
                'last_name' => 'verde',
            ],
            [
                'email' => 'delhi@gmail.com',
                'password' => 'delhi123',
                'name' => 'delhi',
                'last_name' => 'new',
            ],
            [
                'email' => 'mumbai@gmail.com',
                'password' => 'mumbai123',
                'name' => 'mumbai',
                'last_name' => 'singh',
            ],
            [
                'email' => 'raj@gmail.com',
                'password' => 'raj123',
                'name' => 'raj',
                'last_name' => 'mahal',
            ],
            [
                'email' => 'kashemer@gmail.com',
                'password' => 'kashmer123',
                'name' => 'kashmer',
                'last_name' => 'place',
            ],
            [
                'email' => 'spice@gmail.com',
                'password' => 'spice123',
                'name' => 'spice',
                'last_name' => 'hart',
            ],
            [
                'email' => 'dolce@gmail.com',
                'password' => 'dolce123',
                'name' => 'dolce',
                'last_name' => 'salato',
            ],
            [
                'email' => 'marco@gmail.com',
                'password' => 'marco123',
                'name' => 'marco',
                'last_name' => 'polo',
            ],
            [
                'email' => 'borgo@gmail.com',
                'password' => 'borgo123',
                'name' => 'borgo',
                'last_name' => 'toscano',
            ],
            [
                'email' => 'gondoliere@gmail.com',
                'password' => 'gondoliere123',
                'name' => 'gondoliere',
                'last_name' => 'veneziano',
            ],
            [
                'email' => 'forno@gmail.com',
                'password' => 'forno123',
                'name' => 'forno',
                'last_name' => 'caldo',
            ],
            [
                'email' => 'mediterraneo@gmail.com',
                'password' => 'mediterraneo123',
                'name' => 'mediterraneo',
                'last_name' => 'siciliano',
            ],
            [
                'email' => 'thai@gmail.com',
                'password' => 'thai123',
                'name' => 'thai',
                'last_name' => 'aroma',
            ],
            [
                'email' => 'bangkok@gmail.com',
                'password' => 'bangkok123',
                'name' => 'bangkok',
                'last_name' => 'milano',
            ],
            [
                'email' => 'lotus@gmail.com',
                'password' => 'lotus123',
                'name' => 'lotus',
                'last_name' => 'ferrari',
            ],
            [
                'email' => 'cielo@gmail.com',
                'password' => 'cielo123',
                'name' => 'cielo',
                'last_name' => 'terra',
            ],
            [
                'email' => 'lemongrass@gmail.com',
                'password' => 'lemon123',
                'name' => 'lemon',
                'last_name' => 'grass',
            ],
            [
                'email' => 'silk@gmail.com',
                'password' => 'silk123',
                'name' => 'silk',
                'last_name' => 'one',
            ],
        ];

        foreach ($users as $user) {
            $newUser = new User();

            $newUser->email = $user['email'];
            $newUser->password = $user['password'];
            $newUser->name = $user['name'];
            $newUser->last_name = $user['last_name'];
            $newUser->save();
        }
    }
}
