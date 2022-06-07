<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "program_name" => $this->faker->name(),
            "duration" => $this->faker->month(),
            "image_url"  => $this->faker->imageUrl(),
            "publication_status" => "1",
        ];
    }
}
