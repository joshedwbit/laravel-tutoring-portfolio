<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reviews>
 */
class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'school' => $this->faker->text(12),
            'year_group' => $this->faker->randomElement(
                [
                    'KS3',
                    'Year 10',
                    'Year 11',
                    'AS',
                    'A2'
                ]
            ),
            'predicted' => $this->faker->numberBetween($min = 1, $max = 9),
            'achieved' => $this->faker->numberBetween($min = 1, $max = 9),
            'rating' => $this->faker->numberBetween($min = 4, $max = 5),
            'comments' => $this->faker->paragraph(5),
        ];
    }
}
