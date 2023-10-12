<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        $product=new Products();

        $product->name="Papa";
        $product->description="Papa criolla";
        $product->slug="Papa criolla";
        $product->category_id=2;
        $product->save();
        */
        
        //Products::factory(25)->create();
        $products = Products::factory(20)->create();
        foreach ($products as $product) {
            $product->product_supply()->attach([
                rand(1,4),
                rand(5,8),
            ]);
        }
    }
}
