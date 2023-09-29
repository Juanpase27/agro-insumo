<?php

namespace Database\Seeders;

use App\Models\SupplyCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supplyCategory0 = new SupplyCategory();
        $supplyCategory0->name = "Sin especificar";
        $supplyCategory0->description = "No se tiene alguna clasificación especifica para el insumo en cuestión.";
        $supplyCategory0->slug = "sin-especificar";
        $supplyCategory0->save();

        SupplyCategory::factory(10)->create();
    }
}
