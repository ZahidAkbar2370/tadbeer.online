<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TadbeerWelcomeVideo>
 */
class TadbeerWelcomeVideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'short_introduction' => $this->faker->paragraph(1),
            'video_url' => $this->faker->url(),
            'image_url' => $this->faker->imageUrl(),
        ];
    }
}
