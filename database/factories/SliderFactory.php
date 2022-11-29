<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "slider_text" => $this->faker->slug(),
            "button_text" => $this->faker->word(),
            "button_url" => $this->faker->url(),
            "image_url" => $this->faker->imageUrl(),
            "publication_status" => "1",
        ];
    }
}
