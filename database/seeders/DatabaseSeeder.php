<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            ProductCategory::class(),
        ]);
    }
}
