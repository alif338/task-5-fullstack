<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->sentence,
            "content" => $this->faker->paragraph,
            "image" => 'https://via.placeholder.com/640x480',
            "user_id" => rand(1, 5),
            "category_id" => rand(1, 5),

        ];
    }
}
