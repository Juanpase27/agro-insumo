<?php

namespace Database\Seeders;

use App\Models\SupplyCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SupplyCategories::factory(10)->create();
    }
}
