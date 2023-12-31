<?php

namespace Database\Factories;

use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
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
            'categoryProduct_id' => ProductCategory::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
