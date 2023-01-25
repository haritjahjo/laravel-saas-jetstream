<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i <= 12; $i++){
            Product::create([
                'name' => 'Womens '.$i,
                'slug' => 'women-'.$i,
                'detail' => 'women\'s hoodie',
                'description' => 'Lorem ' .$i . ' ipsom dolor',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1,10),
                ]);
        }

        //MEN
        for($i=1; $i <= 12; $i++){
            Product::create([
                'name' => 'Mens '.$i,
                'slug' => 'men-'.$i,
                'detail' => 'men\'s hoodie',
                'description' => 'Lorem ' .$i . ' ipsom dolor lorem',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1,10),
                ]);
        }

        //kids
        
        for($i=1; $i <= 12; $i++){
            Product::create([
                'name' => 'Kids '.$i,
                'slug' => 'kids-'.$i,
                'detail' => 'kid\'s hoodie',
                'description' => 'Lorem ' .$i . ' ipsom dolor lorem',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1,10),
                ]);
        }

        //homegoods
        
        for($i=1; $i <= 12; $i++){
            Product::create([
                'name' => 'Homegoods '.$i,
                'slug' => 'homegoods-'.$i,
                'detail' => 'homegoods',
                'description' => 'Lorem ' .$i . ' ipsom dolor lorem',
                'product_code' => '-00',
                'price' => rand(999, 9999),
                'quantity' => rand(1,10),
                ]);
        }
        
    }
}
