<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use App\Models\Suggestion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Round>
 */
class RoundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'genre' => fake()->randomElement(['non-fiction','fiction']),
            'pick_date' => fake()->dateTimeBetween('now', '+6 months'),
            'judge_id' => User::inRandomOrder()->first()->id,
            'type' => fake()->randomElement(['ranked_ballot','single_judge'])

        ];
    }
}
