<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Product::class;
    public function definition(): array
    {
        $name=$this->faker->sentence();
        return [
            'name'=>$name,
            'slug'=>Str::slug($name, '-'),
            'description'=>$this->faker->paragraph()
        ];
    }
}
