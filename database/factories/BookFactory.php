<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->bs(),
            'author' => fake()->name(),
            'genre' => fake()->randomElement(['fiction','non-fiction']),
            'ISBN' => '978' . fake()->randomNumber(9, true) . fake()->randomDigit(),
            'user_id' => User::inRandomOrder()->first()->id
        ];
    }
}
