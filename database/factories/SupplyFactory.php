<?php

namespace Database\Factories;

use App\Models\Supply;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supply>
 */
class SupplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Supply::class;

    public function definition(): array
    {
        $name = $this->faker->sentence();
        $mi_arreglo = array();

        for ($i = 1; $i <= 10; $i++) {
            $mi_arreglo[] = $i;
        }
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => $this->faker->paragraph(),
            'categorySupply_id' => $this->faker->randomElement($mi_arreglo)
        ];
    }
}
