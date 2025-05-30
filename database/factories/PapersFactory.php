<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Traits\TopicsTrait;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Papers>
 */
class PapersFactory extends Factory
{
    use TopicsTrait;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'year' => $this->faker->numberBetween($min = 2018, $max = date('Y')),
            'paper_number' => $this->faker->numberBetween($min = 1, $max = 3),
            'season' => $this->faker->randomElement(
                [
                    'Winter',
                    'Summer'
                ]
            ),
            'calculator' => $this->faker->boolean,
            'higher' => $this->faker->boolean,
            'question_number' => $this->faker->numberBetween($min = 1, $max = 24),
            'topic' => $this->faker->randomElement(PapersFactory::getTopics()),
            'notes' => null,
        ];
    }
}
