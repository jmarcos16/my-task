<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory()->create(),
            'title' => fake()->sentence(),
            'description' => fake()->sentence(),
            'duration' => fake()->numberBetween(10, 100),
            'started_at' => fake()->dateTime(),
            'ended_at' => fake()->dateTime(),
        ];
    }
}
