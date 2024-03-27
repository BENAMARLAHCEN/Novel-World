<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Statu>
 */
class StatuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'color' => $this->faker->hexColor,
            'background_color' => $this->faker->hexColor,
            'border_color' => $this->faker->hexColor,
            'text_color' => $this->faker->hexColor,
            'icon' => $this->faker->word,
        ];
    }
}
