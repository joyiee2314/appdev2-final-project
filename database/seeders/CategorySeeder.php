<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Create 10 dummy categories
        Category::factory()->count(10)->create();
    }
}
