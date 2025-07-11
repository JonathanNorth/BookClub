<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Book;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        $books = auth()->user()
            ->books()
            ->orderby('created_at', 'desc')
            ->get();
        return view('mybooks', compact('books'));
    }

    public function storeBook(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'ISBN' => 'required',
            'goodreads_link' => 'required'
        ]);

        foreach($incomingFields as $key => &$field)
            $field = strip_tags($field);
        
        $book = new Book();
        $book->id = auth()->user();
        $book->title = $incomingFields['title'];
        $book->author = $incomingFields['author'];
        $book->genre = $incomingFields['genre'];
        $book->ISBN = $incomingFields['ISBN'];
        $book->GoodReads_Link = $incomingFields['goodreads_link'];
        $book->save();
        

    }

    public function myBooks(Request $request){
        return view('my-books');
    }
}
