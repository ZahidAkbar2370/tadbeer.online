<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NewsEvent>
 */
class NewsEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->slug(),
            "description" => $this->faker->text(),
            "type" => "news",
            "image_url" => $this->faker->imageUrl(),
            "publication_status" => "1",
        ];
    }
}
