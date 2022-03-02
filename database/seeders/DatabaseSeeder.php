<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        $products = ['results'];


        // foreach ($products as $product) {
        
        //     Product::factory()->create([
        //         'name' => Product::random(10),
        //         'description' => $product['Str::random'],
        //         'price' => $product['Str::random'],
        //         'heart' => $product['Str::random'],
        //         'colors' => $product['Str::random'],
        //         'slug' => $product['Str::random'],
        //         'image' => $product['Str::random'],
        //         'promotion' => $product['Str::random'],
             
        //     ]);
        // }

        product::factory(30)->create();

    }
}
