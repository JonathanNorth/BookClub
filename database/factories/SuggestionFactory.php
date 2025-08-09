<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use App\Models\Round;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suggestion>
 */
class SuggestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id'  => Book::count() > 0 ? Book::inRandomOrder()->first()->id : Book::factory(),
            'round_id' => Round::count() > 0 ? Round::inRandomOrder()->first()->id : Round::factory(),
            'user_id'  => User::count() > 0 ? User::inRandomOrder()->first()->id : User::factory()
        ];
    }
}
