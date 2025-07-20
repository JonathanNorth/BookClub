<?php

namespace App\Http\Controllers;

use App\Models\Judge;
use App\Http\Requests\StoreJudgeRequest;
use Illuminate\Console\View\Components\Component;
use App\Http\Requests\UpdateWinningSuggestionRequest;

class JudgeController extends Controller
{

    public function displayJudgingRound()
    {
        return view ('judge-display');
    }

    public function addSuggestionToRound(UpdateWinningSuggestionRequest $request)
    {
        $request->validated();
        
    }
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJudgeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Judge $judge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Judge $judge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJudgeRequest $request, Judge $judge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Judge $judge)
    {
        //
    }
}
