<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Book;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function myBooks(Request $request){
        $myBooks = auth()->user()
            ->books()
            ->orderby('created_at', 'desc')
            ->get();
        return view('mybooks', compact('myBooks'));
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
        
       $book = new Book($incomingFields);
       $book->user_id = Auth::id();
       $book->save();

        return redirect('my-books');
    }

  
}
