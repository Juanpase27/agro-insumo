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
        SupplyCategory::factory(10)->create();
    }
}
