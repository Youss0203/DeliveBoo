<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
        [
            'name' => 'Giapponese',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/2252/2252075.png'
        ],
        [
            'name' => 'Africano',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/1704/1704306.png'
        ],
        [
            'name' => 'Spagnolo',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/1923/1923439.png'
        ],
        [
            'name' => 'Koreano',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/2276/2276861.png'
        ],
        [
            'name' => 'Cinese',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/2276/2276872.png'
        ],
        [
            'name' => 'Americano',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/877/877951.png'
        ],
        [
            'name' => 'Messicano',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/5787/5787071.png'
        ],
        [
            'name' => 'Indiano',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/3894/3894669.png'
        ],
        [
            'name' => 'Italiano',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/3595/3595455.png',
        ],
        [
            'name' => 'Thailandese',
            'img_url'=>'https://cdn-icons-png.flaticon.com/128/5136/5136958.png'
        ],

            
        ];
        foreach ($categories as $singleCategory) {
            $newCategory = new Category();
            $newCategory->name = $singleCategory ['name'];
            $newCategory->img_url = $singleCategory ['img_url'];
            $newCategory->save();
        }
    }
}
