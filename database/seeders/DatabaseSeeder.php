<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Words;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (count(Category::all()) < Category::maxCategories()) {
            for ($i = 1; $i <= Category::maxCategories(); $i++) {
                Category::factory()->create();
            }
        }
        Words::factory(10)->create();
//        for ($i = 1; $i <= 26; $i++) {
//            Category::factory()->create();
//        }
//         Category::factory(26)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
