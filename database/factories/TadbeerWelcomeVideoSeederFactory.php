<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TadbeerWelcomeVideoSeederFactory extends Factory
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
            'video_url' => $this->faker->videoUrl(),
            'image_url' => $this->faker->imageUrl(),
        ];
    }
}
