<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();

        Category::create([
            'category' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'category' => 'Web Design',
            'slug' => 'web-Design',
        ]);

        Category::create([
            'category' => 'Machine Learning',
            'slug' => 'Machine-Learning',
        ]);
    }
}
