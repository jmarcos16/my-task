<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'started_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'ended_at' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'duration' => $this->faker->numberBetween(10, 100),
            'user_id' => \App\Models\User::factory()->create(),
        ];
    }
}
