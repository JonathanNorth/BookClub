<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => 'Project Hail Mary',
            'author' => 'Andy Weir',
            'genre' => 'Fiction',
            'ISBN' => 9786557822517,
            'GoodReads_Link' => 'https://www.goodreads.com/book/show/54493401-project-hail-mary',
            'user_id' => 1
        ]);

        DB::table('books')->insert([
            'title' => 'Vimy',
            'author' => 'Pierre Berton',
            'genre' => 'Non Fiction',
            'ISBN' => 9780140104394,
            'GoodReads_Link' => 'https://www.goodreads.com/book/show/190293.Vimy?from_search=true&from_srp=true&qid=X8ZL6C4Dor&rank=1',
            'user_id' => 2
        ]);
    }
}
