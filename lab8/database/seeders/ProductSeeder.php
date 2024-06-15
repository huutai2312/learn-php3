<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            ['name' => 'Product 1', 'description' => 'Description 1', 'price' => 10.00],
            ['name' => 'Product 2', 'description' => 'Description 2', 'price' => 20.00],
        ]);
    }

}
