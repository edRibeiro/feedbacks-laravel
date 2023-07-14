<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Feedback>
 */
class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner_id' => User::factory(),
            'recipient_id' => User::factory(),
            'finalfeedback' => fake()->paragraph(),
            'improvementpoints' => fake()->paragraph(),
            'maintainpoints' => fake()->paragraph(),
            'suggestions' => fake()->paragraph(),
        ];
    }
}
