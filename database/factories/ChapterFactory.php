<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapter>
 */
class ChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $novelIds = \App\Models\Novel::pluck('id')->toArray();
        return [
            'novel_id' => $this->faker->randomElement($novelIds),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(20, true),
            'status' => $this->faker->randomElement(['rejected', 'published', 'pending']),
            'number' => $this->faker->numberBetween(1, 100),
            'views' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
