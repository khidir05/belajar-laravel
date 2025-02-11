<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        return [
            'judul' => fake()->sentence(),
            'author_id' => \App\Models\User::factory(),
            'isi' => fake()->paragraph(),
            'slug' => Str::slug(fake()->sentence()),
            'category_id' => \App\Models\Category::factory(), // Assign a category to the post
        ];
    }
}