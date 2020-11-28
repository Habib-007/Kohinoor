<?php

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Products::class,20)->create();
        $products = Products::select('id')->get();
        foreach($products as $product){
            $product-> addMediaFromUrl('https://lorempixel.com/640/480/?40039')->toMediaCollection('products');
        }
    }
}
