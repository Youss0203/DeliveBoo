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
            'Italiano',
            'Spagnolo',
            'Thailandese',
            'Messicano',
            'Africano',
            'Indiano',
            'Americano',
            'Giapponese',
            'Cinese',
            'Koreano'
        ];
        foreach ($categories as $singleCategory) {
            $newCategory = new Category();
            $newCategory->category = $singleCategory;
            $newCategory->save();
        }
    }
}
