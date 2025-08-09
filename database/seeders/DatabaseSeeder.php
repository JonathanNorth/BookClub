<?php

namespace Database\Seeders;

use App\Models\Book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Round;
use App\Models\Suggestion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(4)->create();

        for($i=0; $i < 3; $i++){
            $round = Round::factory()->create();

            foreach($users as $user){
                Suggestion::factory()->create([
                    'book_id' => Book::factory(),
                    'round_id' => $round->id,
                    'user_id' => $user->id
                ]);
            }
        }
    }
}
