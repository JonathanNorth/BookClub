<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Round;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreSuggestionRequest;
use App\Http\Requests\UpdateSuggestionRequest;

class SuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('suggestion-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Round $round)
    {
       $incomingFields = $request->validate([
        'book_id' => 'required|integer|exists:books,id'
       ]);


       foreach($incomingFields as $key => &$field)
            $field = strip_tags($field);
        
       $suggestion = new Suggestion($incomingFields);
       $suggestion->user_id = Auth::id();
       $suggestion->round_id = $round->id;
       $suggestion->save();

       return redirect('/');


    }

    /**
     * Display the specified resource.
     */
    public function show(Suggestion $suggestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Suggestion $suggestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSuggestionRequest $request, Suggestion $suggestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Suggestion $suggestion)
    {
        //
    }
}
