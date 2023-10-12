<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Factories\SupplyCategoriesFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //Storage::makeDirectory('public/posts');
        Storage::DeleteDirectory('posts');
        Storage::makeDirectory('posts');
        
        $this->call(UserSeeder::class);
        $this->call(SupplyCategorySeeder::class);
        $this->call(ProductCategoriesSeeder::class);
        $this->call(SupplySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(PostSeeder::class);
    }
}
