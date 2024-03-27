<?php

namespace Database\Factories;

use App\Models\Statu;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Novel>
 */
class NovelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = User::get()->random()->id;
        $status_id = Statu::get()->random()->id;
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'cover' => $this->faker->imageUrl(),
            'statu_id' => $status_id,
            'user_id' => $user_id,
            'views' => 0,
            'status' => 'pending',
        ];
    }
}
