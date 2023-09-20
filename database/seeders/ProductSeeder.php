<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product=new Product();

        $product->name="Papa";
        $product->description="Papa criolla";
        $product->slug="Papa criolla";
        $product->category_id=2;
        $product->save();
        
        Product::factory(25)->create();
    }
}
