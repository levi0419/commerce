<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productCategory = [
            [
                'name' => 'Bakery',
                'description' => 'Bakery',
            ],

            [
                'name' => 'Drinks',
                'description' => 'Drinks',
            ],

            [
                'name' => 'Fruits and vegetables',
                'description' => 'Fruits and vegetables',
            ],

            [
                'name' => 'Meat and fish',
                'description' => 'Meat and fish',
            ],

            [
                'name' => 'Kitchen',
                'description' => 'Kitchen',
            ],

            [
                'name' => 'Special Nutrition',
                'description' => 'Special Nutrition',

            ],

            [
                'name' => 'Baby',
                'description' => 'Baby',

            ],

            [
                'name' => 'Pharmacy',
                'description' => 'Pharmacy',

            ]

        ];

        ProductCategory::insert($productCategory);



    }
}
