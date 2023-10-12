<?php

namespace Database\Factories;

use App\Models\SupplyCategories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SuppliesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->sentence(20);
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->text(200),
            'categorySupply_id'=>SupplyCategories::all()->random()->id
        ];
    }
}
