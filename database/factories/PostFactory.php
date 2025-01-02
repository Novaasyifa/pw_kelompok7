<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => fake()->sentence(),
            'author_id' => User::factory(),
            'category_id' => Category::inRandomOrder()->value('id'),
            'genre_id' => Genre::inRandomOrder()->value('id'),
            'price' => fake()->randomFloat(3, 1, 100),
            'description' => fake()->text(),
            'image' => 'http://picsum.photos/400/400?random=post' . random_int(1, 100),
        ];
    }
}
