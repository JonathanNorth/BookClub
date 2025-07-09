<?php

namespace App\Http\Controllers;

use PDO;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    public function create(){
        $suggestions = auth()->user()
            ->suggestions()
            ->orderby('created_at', 'desc')
            ->get();
        return view('create-suggestion', compact('suggestions'));
    }

    public function storeSuggestion(Request $request){

    }
}
