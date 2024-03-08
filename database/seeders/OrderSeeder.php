<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'customer_name' => 'Gino',
                'customer_lastname' => 'Mare',
                'customer_address' => 'Via montagne 32',
                'customer_phone' => 3334445555,
                'total_amount' => 10.50,
            ],
            [
                'customer_name' => 'Mario',
                'customer_lastname' => 'Rossi',
                'customer_address' => 'Via Montenapoleone 10',
                'customer_phone' => 3456789123,
                'total_amount' => 25.75,
            ],
            [
                'customer_name' => 'Paolo',
                'customer_lastname' => 'Bianchi',
                'customer_address' => 'Corso Buenos Aires 15',
                'customer_phone' => 3487654321,
                'total_amount' => 42.00,
            ],
            [
                'customer_name' => 'Giulia',
                'customer_lastname' => 'Verdi',
                'customer_address' => 'Piazza del Duomo 8',
                'customer_phone' => 3661234567,
                'total_amount' => 60.20,
            ],
            [
                'customer_name' => 'Laura',
                'customer_lastname' => 'Neri',
                'customer_address' => 'Via Torino 20',
                'customer_phone' => 3669988776,
                'total_amount' => 15.99,
            ],
            [
                'customer_name' => 'Luigi',
                'customer_lastname' => 'Bianchi',
                'customer_address' => 'Corso Vittorio Emanuele II 5',
                'customer_phone' => 3337778889,
                'total_amount' => 32.50,
            ],
            [
                'customer_name' => 'Francesca',
                'customer_lastname' => 'Russo',
                'customer_address' => 'Via Dante 18',
                'customer_phone' => 3332225558,
                'total_amount' => 12.75,
            ],
            [
                'customer_name' => 'Marco',
                'customer_lastname' => 'Verdi',
                'customer_address' => 'Corso Magenta 30',
                'customer_phone' => 3664433221,
                'total_amount' => 55.30,
            ],
            [
                'customer_name' => 'Elena',
                'customer_lastname' => 'Ferrari',
                'customer_address' => 'Piazza San Babila 3',
                'customer_phone' => 3456789999,
                'total_amount' => 20.00,
            ],
            [
                'customer_name' => 'Giovanni',
                'customer_lastname' => 'Moretti',
                'customer_address' => 'Via Larga 22',
                'customer_phone' => 3887654321,
                'total_amount' => 40.50,
            ],
            [
                'customer_name' => 'Silvia',
                'customer_lastname' => 'Galli',
                'customer_address' => 'Corso Europa 12',
                'customer_phone' => 3778901234,
                'total_amount' => 18.75,
            ],
            [
                'customer_name' => 'Matteo',
                'customer_lastname' => 'Marchetti',
                'customer_address' => 'Via Monti 9',
                'customer_phone' => 3661122300,
                'total_amount' => 22.99,
            ],
            [
                'customer_name' => 'Chiara',
                'customer_lastname' => 'Rizzo',
                'customer_address' => 'Corso Italia 35',
                'customer_phone' => 3888765432,
                'total_amount' => 65.00,
            ],
            [
                'customer_name' => 'Roberto',
                'customer_lastname' => 'Conti',
                'customer_address' => 'Via della Spiga 7',
                'customer_phone' => 3661128884,
                'total_amount' => 28.75,
            ],
            [
                'customer_name' => 'Alessia',
                'customer_lastname' => 'Pellegrini',
                'customer_address' => 'Corso Buenos Aires 40',
                'customer_phone' => 3451122334,
                'total_amount' => 37.50,
            ],
            [
                'customer_name' => 'Davide',
                'customer_lastname' => 'Barbieri',
                'customer_address' => 'Piazza Cordusio 14',
                'customer_phone' => 3779988776,
                'total_amount' => 19.99,
            ],
            [
                'customer_name' => 'Elisa',
                'customer_lastname' => 'Marini',
                'customer_address' => 'Via Manzoni 25',
                'customer_phone' => 3881112223,
                'total_amount' => 45.30,
            ],
            [
                'customer_name' => 'Federico',
                'customer_lastname' => 'Vitali',
                'customer_address' => 'Corso Monforte 16',
                'customer_phone' => 3664729222,
                'total_amount' => 27.50,
            ],
            [
                'customer_name' => 'Sara',
                'customer_lastname' => 'Morelli',
                'customer_address' => 'Via Mercanti 11',
                'customer_phone' => 3888877665,
                'total_amount' => 33.75,
            ],
            [
                'customer_name' => 'Simone',
                'customer_lastname' => 'Sartori',
                'customer_address' => 'Corso Garibaldi 28',
                'customer_phone' => 3776565656,
                'total_amount' => 60.99,
            ],
            [
                'customer_name' => 'Martina',
                'customer_lastname' => 'Leone',
                'customer_address' => 'Piazza Oberdan 2',
                'customer_phone' => 3459988776,
                'total_amount' => 14.50,
            ],
        ];

        foreach ($orders as $order) {
            $newOrder = new Order();

            $newOrder->customer_name = $order['customer_name'];
            $newOrder->customer_lastname = $order['customer_lastname'];
            $newOrder->customer_address = $order['customer_address'];
            $newOrder->customer_phone = $order['customer_phone'];
            $newOrder->total_amount = $order['total_amount'];
            $newOrder->save();
        }
    }
}
