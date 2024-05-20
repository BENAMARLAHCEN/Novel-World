<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = \App\Models\User::whereHas('roles', function ($query) {
            $query->where('name', 'reader');
        })->pluck('id')->toArray();
        $novelIds = \App\Models\Novel::pluck('id')->toArray();
        return [
            'rating' => $this->faker->numberBetween(1, 5),
            'content' => $this->faker->paragraph,
            'user_id' => $this->faker->randomElement($userIds),
            'novel_id' => $this->faker->randomElement($novelIds),
        ];
    }
}
